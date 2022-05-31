@extends('layouts.app')
@section('content')

<section class="px-10 py-32 bg-gray-200">
    <div class="p-10 mx-auto bg-white rounded-lg shadow md:w-3/4 lg:w-1/2">
        <h3 class="text-2xl font-bold text-center text-capitalize">Start Chat wiht below users</h3>
        <table class="table table-hover">
            <thead>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="mt-2">
                    @if(Auth::id() != $user->id)
                    <td>{{$user->name}} </td>
                    <td class="text-right">
                        <a class="px-4 py-2 text-center 
                         border bg-gradient-to-b 
                       from-green-400 to-blue-400
                         rounded-lg hover:shadow-xl" href="{{ url('start_chat/a?recipient_id='.$user->id) }}">Start Chat</a>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection