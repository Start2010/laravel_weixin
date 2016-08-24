@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.{{$data['name']}} ---{{$data['address']}}
                        <p>{!! isset($title) ? $title : 'no value' !!}</p>
                        @if(count($class)===1)
                        <p> I have one record</p>
                        @elseif(count($class) > 1)
                        <p> I have multiple record</p>
                        @else
                        <p> I have any record</p>
                        @endif
                        <h3>unless</h3>
                        <hr>
                        @unless(Auth::check())
                            You are not signed in.

                        @endunless
                        <h3>循环</h3>
                        @for($i =0 ;$i <10 ; $i++)
                            The current value is {{$i}} <br>
                        @endfor

                        <h3>foreach</h3>

                        @foreach($class as $v )
                            {{$v}}
                            @endforeach
                        <h3>forelse</h3>
                        @forelse($class as $v)
                        <li>{{$v}}</li>
                            @empty
                            <p>No Values</p>

                        @endforelse
                        <h2>while</h2>
                        @while($i < count($class))
                            <p>I'm loop forever.</p>
                            $i++
                        @endwhile
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

