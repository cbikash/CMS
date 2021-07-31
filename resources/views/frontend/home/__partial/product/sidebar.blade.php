
<ul class="list-group">
    <li class="list-group-item category-title text-white">Product Categories</li>
    @foreach ($categories as $category)
        <li class="list-group-item "><a class="link-cat" href="{{route('front.product.category',$category)}}"><i class="fas fa-hand-point-right hide-normal"></i>  {{$category->name}}</a></li>
    @endforeach
</ul>