{{--main div starts here--}}
<div class="categorious">
  {{--cate div starts here--}}
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <div class="items">
        <ul>
            @foreach ($allCategories as $r)
                <a href="{{url('buynow/'.$r->id)}}"><li>{{$r->categoryname}}</li></a>   
            @endforeach
        </ul>
    </div>
</div>