<?php

namespace App\Http\Controllers;

use App\Repositories\ConversationsRepository;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\StoreMessageRequest;
use App\Notifications\MessageReceived;


class ConversationsController extends Controller
{
    private $r;
    private $auth;

    public function __construct(ConversationsRepository $conversationRepository, AuthManager $auth)
    {
        $this->middleware('auth');
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }
    public function index()
    {
        return view('conversations.index');
    }

    public function show(User $user)
    {
        $me = $this->auth->user();
        $messages = $this->r->getMessagesFor($me->id, $user->id)->paginate(25);
        $unread = $this->r->unreadCount($me->id);

        if(isset($unread[$user->id])){
            $this->r->readAllFrom($user->id, $me->id);
            unset($unread[$user->id]);
        }

        return view('conversations.show',[
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $messages,
            'unread' => $unread
        ]);
    }

    public function store(User $user, StoreMessageRequest $request)
    {
        $message = $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );

        $user->notify(new MessageReceived($message));

        return redirect()->back();
    }


}
