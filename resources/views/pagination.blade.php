<div class="row">
    @foreach($data as $row)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow p-2">
                <img class="card-img-top mb-1" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="img">
                <h5><strong>{{ $row->name }}</strong></h5>
                <div class="card-body p-1">
                    <p class="card-text"><b>Authors:</b>
                        @foreach ($row->authors as $author)
                            {{$author->name}} ,
                        @endforeach
                    </p>
                    <p class="card-text"><b>Publisher:</b> {{ $row->publisher->name }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div>
    {!! $data->render() !!}
</div>

<script src="{{ asset('assets/holder.min.js') }}"></script>


