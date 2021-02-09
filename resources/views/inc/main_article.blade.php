<div class="container ">
@foreach($main as $element)
            <div class="card  mb-3 bg-light  "style="height: auto;">
                <h3 class="ml-2 mt-2 text-info" style="text-indent: 20px">{{ $element->article }}</h3>
                <div class="card-body text-justify p-0 ">
                    <div class="container" style="height: 400px; width: 70%; ">
                        <img src="{{ asset($element->image) }}" class="img_for_news"/>
                    </div>
                    <p class="card-text  m-3" style="text-indent: 20px">{{ $element->text }}</p>
                    <small class="ml-4">Опубликовано - {{ $element->created_at }}</small>
                </div>
            </div>
@endforeach
    </div>
