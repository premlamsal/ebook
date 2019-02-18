@extends('layout.app')
@section('PageContent')
<section id="aa-blog-archive">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-blog-archive-area aa-blog-archive-2">
                <div class="row">
                  <div class="col-md-9">
                    <div class="aa-blog-content">
                      <div class="row">
                        @if (count($blogs)>0)
                        @foreach ($blogs as $item)
                            
                       
                        <div class="col-md-4 col-sm-4">
                          <article class="aa-latest-blog-single">
                            <figure class="aa-blog-img">                    
                              <a href="/blog/{{$item->id}}"><img alt="img" src="{{$item->blog_image}}"></a>  
                                <figcaption class="aa-blog-img-caption">
                                
                                <span href="#"><i class="fa fa-clock-o"></i>{{$item->created_at}}</span>
                              </figcaption>                          
                            </figure>
                            <div class="aa-blog-info">
                              <h3 class="aa-blog-title"><a href="/blog/{{$item->id}}">{{$item->blog_title}}</a></h3>
                              <p>{{ str_limit($item->blog_body, 250) }}</p> 
                              <a class="aa-read-mor-btn" href="/blog/{{$item->id}}">Read more <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                          </article>
                        </div>
                        @endforeach
                            
                        @endif             
                      </div>
                    </div>
                    <!-- Blog Pagination -->
                    {{ $blogs->links() }}
                    {{-- <div class="aa-blog-archive-pagination">
                      <nav>
                        <ul class="pagination">
                          <li>
                            <a aria-label="Previous" href="#">
                              <span aria-hidden="true">«</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a aria-label="Next" href="#">
                              <span aria-hidden="true">»</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div> --}}
                  </div>
                  <div class="col-md-3">
                    <aside class="aa-blog-sidebar">
                      <div class="aa-sidebar-widget">
                        <h3>Recent Post</h3>
                        <div class="aa-recently-views">
                          <ul>
                            <li>
                              <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                              <div class="aa-cartbox-info">
                                <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                <p>March 26th 2016</p>
                              </div>                    
                            </li>
                            <li>
                              <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                              <div class="aa-cartbox-info">
                                <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                <p>March 26th 2016</p>
                              </div>                    
                            </li>
                             <li>
                              <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                              <div class="aa-cartbox-info">
                                <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                <p>March 26th 2016</p>
                              </div>                    
                            </li>                                      
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
