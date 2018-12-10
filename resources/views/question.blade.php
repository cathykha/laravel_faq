@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Question</div>

                    <div class="card-body">

                        {{$question->body}}
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary float-right"
                           href="{{ route ('questions.edit',['id'=> $question->id]) }}">
                            Edit Question
                        </a>
                        {{Form::open(['method'=>'DELETE', 'route'=> ['questions.destroy', $question->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary float-left"
                           href="{{ route('answers.create', ['question_id'=> $question->id]) }}">Answer Question
                        </a>
                        <a class="btn btn-default float-right"
                           href='#'> Sort
                        </a>
                    </div>


                    <div class="card-body">
                        @forelse($question->answers as $answer)
                            <div class="card">
                                <div class="card-body">{{$answer->body}}</div>
                                <div class="card-footer">
                                    <a class="btn btn-primary float-right"
                                       href="{{ route('answers.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        View
                                    </a>
                                    <div class="interactive">

                                        <a class="btn btn-default float-left" type="button" href="{{ url("/like/{$answer->id}") }}">
                                            Like ({{ $answer->like->count() }})
                                        </a>

                                    </div>
                                </div>

                            </div>
                        @empty
                            <div class="card">

                                <div class="card-body"> No Answers</div>
                            </div>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- <button class="btn btn-default float-left like">
                             <span id="count">Like ({{ $answer->like()->count() }})</span>
                         </button>--}}
    {{--
                                            //<a href="{{ URL::route('likes.view') }}" class="btn btn-default"> Like ({{ $answer->like()->count() }}) </a>
    --}}
    {{--
                                           This one is fine <button class="btn btn-default float-left like" type="button" data-size="ajax" onclick="window.location='{{ url("/view/'answer_id'") }}'">Like ({{ $answer->like()->count() }})</button>
    --}}

    {{--
                                           // <button href="{{ route('answers.like') }}" type="button" class="btn btn-default">Like ({{ $answer->like()->count() }})</button>
    --}}

    {{--<a href="{{ route('like') }}" class="like"> Like ({{ $answer->like()->count() }})


    </a>--}}

    {{-- <a href="{{ action('AnswerController@like', ['question_id'=>$question->id]) }}" class='like' type='button' id='getRequest' role="button" tabindex="0">
         Like ({{ $answer->like->count() }})

     </a>--}}
@endsection
