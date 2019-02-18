@extends('layout.app')
@section('PageContent')
<section id="aa-blog-archive">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-blog-archive-area">
                <div class="row">
                  <div class="col-md-9">
                    <!-- Blog details -->
                    <div class="aa-blog-content aa-blog-details">
                      <article class="aa-blog-content-single">                        
                        <h2><a href="#">{{$blog->blog_title}}</a></h2>
                         <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Makalu Publication</a>
                          </div>
                          <div class="aa-post-date">
                                {{$blog->created_at}}
                          </div>
                        </div>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="{{$blog->blog_image}}" alt="blog"></a>
                        </figure>
                        <p>{!!$blog->blog_body!!}</p>
                         <div class="blog-single-bottom">
                          <div class="row">
                            {{-- <div class="col-md-8 col-sm-6 col-xs-12">
                              <div class="blog-single-tag">
                                <span>Tags:</span>
                                <a href="#">Fashion,</a>
                                <a href="#">Beauty,</a>
                                <a href="#">Lifestyle</a>
                              </div>
                            </div> --}}
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="blog-single-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </article>
                      <!-- blog navigation -->
                      <div class="aa-blog-navigation">
                        <a class="aa-blog-prev" href="#"><span class="fa fa-arrow-left"></span>Prev Post</a>
                        <a class="aa-blog-next" href="#">Next Post<span class="fa fa-arrow-right"></span></a>
                      </div>
                     
                      
                    </div>
                  </div>
    
                  <!-- blog sidebar -->
                  <div class="col-md-3">
                    <aside class="aa-blog-sidebar">
                       
                    
                      
                      <div class="aa-sidebar-widget">
                            <h3>Recent Post</h3>
                            {{-- <div class="aa-recently-views">
                              <ul>
                                    @if (count($blogs)>0)
                                    @foreach ($blogs as $item)
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                              <h4><a href="">{{$item->blog_title}}</a></h4>
                                              <p>{{$item->created_at}}</p>
                                            </div>                    
                                          </li>
                                    @endforeach
                                @endif --}}
                                                                       
                              </ul>
                            </div>                            
                        </div>
                    </aside>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
