@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
    </header>
    <div class="page-title-banner">
        <span>Isomark Services</span>
    </div>
    <div class="content-wrapper clearfix">
    <div class="contents-col" data-spy="affix" data-offset-top="100" data-offset-bottom="1000">
        <h2>contents</h2>
        <ul>
            <li><a href="#service1">Service One</a></li>
            <li><a href="#service2">Service Two</a></li>
            <li><a href="#service3">Service Three</a></li>
            <li><a href="#service4">Service Four</a></li>
            <li><a href="#service5">Service Five</a></li>
            <li><a href="#service6">Service Six</a></li>
            <li><a href="#service7">Service Seven</a></li>
            <li><a href="#service8">Service Eight</a></li>
        </ul>
    </div>
    <div class="details-col">
        @foreach(range(1,9) as $index)
            <section class="service-detail clearfix" id="service{{$index}}">
                <h1 class="service-title">Service {{$index}}</h1>
                <p class="service-description"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi maxime non quasi quo veritatis? Aut dicta, eos expedita facilis libero minima nulla obcaecati optio, quidem recusandae similique totam unde, voluptatum!</span><span>Adipisci deserunt error est laudantium officiis voluptas voluptate. Ab alias, aperiam asperiores cum debitis itaque maxime neque pariatur recusandae reprehenderit sint vero voluptatibus! Accusantium facilis iure officiis ut vero voluptatibus.</span><span>A aperiam assumenda consequuntur culpa dignissimos doloremque eaque earum, enim et ex facilis hic illo laudantium libero magni maiores maxime odio perferendis quis quisquam recusandae tempora temporibus totam veritatis voluptatibus.</span><span>Aperiam blanditiis dicta distinctio dolore ducimus ex expedita incidunt maiores minus nam necessitatibus non, quaerat, qui, sunt veritatis. Aperiam dignissimos esse et ex fugit ipsum quasi quod sapiente sed suscipit!</span><span>Cumque debitis distinctio eligendi expedita impedit, iure nisi placeat quae quod veritatis. A accusamus animi at dicta doloremque facilis laborum odit quasi repellat velit? Aliquid laboriosam maiores quas. Adipisci, quidem!</span><span>Ad consectetur debitis enim maiores nobis omnis provident quod sequi sit velit. Aperiam consequuntur deserunt eveniet nesciunt nisi nobis quibusdam quos rerum vero voluptas! Dolore minus nemo quo reprehenderit saepe.</span><span>Accusamus asperiores aut commodi consequatur deserunt dicta distinctio dolorum eaque eius est et expedita, fugiat id impedit minima mollitia nesciunt pariatur quisquam, quos sapiente sunt suscipit ut veniam vero vitae.</span><span>Dolor esse exercitationem provident repudiandae saepe tenetur velit. Adipisci at, deleniti fuga ipsum laudantium magni maxime modi natus nobis quam, quas rem sunt, vel. Asperiores ipsa quasi qui repellat voluptas.</span><span>Aut cumque cupiditate delectus deleniti distinctio dolorem eligendi enim eos exercitationem ipsam iure libero molestiae nihil officia placeat porro possimus quae qui quos repellendus sequi soluta, ut veniam vitae voluptas?</span><span>Accusantium architecto delectus ex facere facilis, illo maxime, molestiae officia perspiciatis porro, rem ut vel. Doloribus nam, non! Commodi dignissimos dolore enim eveniet laboriosam, mollitia nisi quaerat recusandae soluta vel?</span></p>
            <button class="btn prompt-button pull-right">more</button>
            </section>
        @endforeach
    </div>
    </div>
    @include('front.partials.footer')
@endsection