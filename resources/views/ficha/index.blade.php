@extends('componentes.corpo')
@section('conteudo')

<section class="s-content s-content--single">
    <div class="row">
        <div class="column large-12">

            <article class="s-post entry format-standard">

                <div class="s-content__media">
                    <div class="s-content__post-thumb">
                        <img src="assets/images/thumbs/single/standard/standard-1050.jpg" 
                             srcset="assets/images/thumbs/single/standard/standard-2100.jpg 2100w, 
                             assets/images/thumbs/single/standard/standard-1050.jpg 1050w, 
                             assets/images/thumbs/single/standard/standard-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                    </div>
                </div> 

                <div class="s-content__primary">

                    <h2 class="s-content__title s-content__title--post">Hey, This Is A Standard Format Post.</h2>

                    <ul class="s-content__post-meta">
                        <li class="date">September 05, 2020</li>
                        <li class="cat"><a href="">Frontend</a><a href="">Design</a></li>
                    </ul>

                    <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                    </p>
                    
                    <div class="s-content__pagenav group">
                        <div class="prev-nav">
                            <a href="#" rel="prev">
                                <span>Previous</span>
                                Tips on Minimalist Design 
                            </a>
                        </div>
                         <div class="next-nav">
                             <a href="#" rel="next">
                                 <span>Next</span>
                                Less Is More 
                             </a>
                         </div>
                     </div> 

                </div>
            </article>

        </div> 
    </div> 



</section> 
@endsection
