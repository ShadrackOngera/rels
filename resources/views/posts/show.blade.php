@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-white py-5">Title of offer</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <h5>Location:&nbsp;<strong>Kitengela</strong></h5>
        <h5>Land Size:&nbsp;<strong>4 Ha</strong></h5>
        <h5>Seller Name:&nbsp;<strong>Robert Cannel</strong></h5>
        <h5>Outright Price:&nbsp;<strong>Ksh. 1,000,000</strong></h5>
        <hr>
        <div class="mb-5">
            <h4 class="text-decoration-underline">Offer Description</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque dicta fugit molestias possimus sint veniam. Animi aut ducimus
                error illo ipsum laudantium magnam, magni necessitatibus nobis officia, qui quidem recusandae rem saepe velit veritatis voluptatem
                voluptatibus? A aut earum eius, eveniet ipsa itaque magnam maiores necessitatibus quaerat qui ratione sapiente tenetur vitae. Dicta
                dolorum nulla quibusdam repudiandae sint! Ad aliquam aliquid animi beatae cum debitis deserunt dolor earum harum, illum ipsam ipsum
                laboriosam nobis perferendis praesentium qui recusandae tempora temporibus velit veniam! Ab accusantium commodi, enim eos eum, ipsa
                ipsam iusto nobis soluta ullam ut voluptas! Aliquid commodi, consectetur delectus ea eaque earum ex, ipsa ipsam iusto laudantium maxime
                nobis omnis optio, praesentium rem repudiandae sequi similique. Aliquam animi aperiam, aut autem blanditiis culpa cupiditate debitis,
                doloremque dolores dolorum ducimus ea eligendi eos ex id illum ipsam magni maiores molestiae neque nesciunt odio perspiciatis quos
                reprehenderit repudiandae rerum sed sit sunt totam ullam unde ut veniam voluptatem? Animi eligendi in iure mollitia optio. Ab ad alias animi
                aspernatur blanditiis cum cumque cupiditate dolores, dolorum enim exercitationem hic illum incidunt ipsa, iusto laborum modi neque possimus
                provident quidem quis quo sunt voluptatum! Exercitationem hic maiores nemo placeat, reprehenderit suscipit veritatis?
            </p>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ route('home') }}" class="btn btn-info text-white">Back</a>
        </div>
    </div>
    <div></div>
@endsection
