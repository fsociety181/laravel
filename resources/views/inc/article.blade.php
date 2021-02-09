<div class="container">
    <div class="row">
@foreach($data as $element)
            <div class="col-4 mt-5 mb-5 "  style="width: 380px; height: 465px;">
                <div class="card bg-light" style="text-indent: 15px; height: 510px;">
                    <img src="{{ asset( $element->image) }}" class="img_for_home"/>
                    <div class="card-body text-justify h-100" >
                        <h5 class="mt-0 text-info ">{{ $element->article }}</h5>
                        <p class="card-text">{{ Str::limit($element->text, 50) }}</p>
                        <a class="a-card" href={{ route('news') }}  >Подробнее..</a></br>
                        <small>Дата публикации: {{ $element->created_at }}</small>
                    </div>
                </div>
            </div>
@endforeach
    </div>

</div>

