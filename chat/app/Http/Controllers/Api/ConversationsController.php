<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ConversationsRepository;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    private $conversationRepository;

    public function __construct(ConversationsRepository $conversationRepository){
        $this->conversationRepository = $conversationRepository;
    }
    public function index(Request $request){
        return response()
          ->json([
              'conversations' => $this->conversationRepository->getConversations($request->user()->id)
          ]);
    }
}
