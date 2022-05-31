@extends('layouts.app')
@section('content')

<section class="px-10 py-32 bg-gray-200">
    <div class="p-10 mx-auto bg-white rounded-lg shadow md:w-3/4 lg:w-1/2">
        <h3 class="text-2xl font-bold text-center text-capitalize">Chat Messages </h3>

        <div class="container mx-auto">
            <div class="max-w-2xl border rounded">
                <div>
                    <div class="w-full">
                        <div class="relative flex items-center p-3 border-b border-gray-300">
                            <img class="object-cover w-10 h-10 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
                            <span class="block ml-2 font-bold text-gray-600">{{ auth()->user()->name }}</span>
                            <span class="absolute w-3 h-3 bg-green-600 rounded-full left-10 top-3">
                            </span>
                        </div>

                        <div class="relative w-full p-6 overflow-y-auto h-[40rem]">
                            <ul class="space-y-2">
                                @foreach($messages as $message)
                                @if($message->recipient_id == Auth::id())
                                <li class="flex justify-end">
                                    <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                        <span class="block">{{$message->message}}</span>
                                    </div>
                                </li>

                                @else
                                <li class="flex justify-start">
                                    <a href="{{ url('delete_message/'.$message->id.'/'.$message->recipient_id) }}" class="bg-blue-300 px-4 py-2 rounded shadow">
                                        <i class="fa fa-trash-o" style="font-size:20px;color:red"></i> </a>
                                    <div class="relative max-w-xl bg-green-300 px-4 py-2 text-gray-700 rounded shadow">
                                        <span class="block">{{$message->message}}</span>
                                    </div>
                                </li>

                                @endif

                                @foreach($replied_messages as $reply)
                                <li class="flex justify-end">
                                    <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                        <a href="{{ url('delete_message/'.$message->id.'/'.$message->recipient_id) }}" class="bg-blue-300 px-4 py-2 rounded shadow">
                                            <i class="fa fa-trash-o" style="font-size:20px;color:red"></i> </a>
                                        <span class="block">{{$reply->replied_message}}</span>
                                    </div>
                                </li>
                                @if($message->id == $reply->message_id && $reply->recipient_id == Auth::id() )
                                @else
                                <li class="flex justify-start">
                                    <div class="relative max-w-xl bg-green-300 px-4 py-2 text-gray-700 rounded shadow">
                                        <span class="block">{{$reply->replied_message}}</span>
                                    </div>
                                </li>

                                @endif

                                @endforeach
                                @endforeach


                            </ul>

                        </div>

                        <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">

                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>

                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </button>
                            <form method="POST" action="{{ route('send_message') }}">
                                @csrf
                                <input type="text" placeholder="Message" class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700" name="message" required />
                                <input type="hidden" class="block w-full py-2 pl-4 mx-3 
                                bg-gray-100 rounded-full outline-none
                                 focus:text-gray-700" name="recipient_id" value="{{ app('request')->input('recipient_id') }}" required />

                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                    </svg>
                                </button>

                                <button type="submit">
                                    <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection