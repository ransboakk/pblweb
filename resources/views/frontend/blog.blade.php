@extends('frontend.layout.main')
@section('content')
    <!-- Start Page Title Area -->
    <div style="background-image: url('{{ asset('uploads/' . $blog->thumbnail) }}');" class="page-title-area item-bg2 jarallax" data-jarallax="{" speed":="" 0.3}"="">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$blog->title}}</h2>
                {{-- <p>Our latest news</p> --}}
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        {{-- <div class="article-image">
                            <img src="{{asset('frontend/images/5.jpg')}}" alt="image">
                        </div> --}}

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a href="#">{{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}</a></li>
                                    <li><span>Posted By:</span> <a href="#">Prudential Bank Ghana</a></li>
                                </ul>
                            </div>

                            {{-- <h3>{{$blog->title}}</h3> --}}

                            {!! $blog->body !!}

                            
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>

                                <a href="#">Fashion</a>,
                                <a href="#">Games</a>,
                                <a href="#">Travel</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="comments-area">
                        <h3 class="comments-title">2 Comments:</h3>

                        <ol class="comment-list">
                            <li class="comment">
                                <article class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="{{asset('frontend/images/author1.jpg')}}" class="avatar" alt="image">
                                            <b class="fn">James Anderson</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <time>April 24, 2021 at 10:59 am</time>
                                            </a>
                                        </div>
                                    </footer>

                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>

                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </article>

                                <ol class="children">
                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="{{asset('frontend/images/author2.jpg')}}" class="avatar" alt="image">
                                                    <b class="fn">Steven Smith</b>
                                                    <span class="says">says:</span>
                                                </div>
    
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time>April 24, 2021 at 10:59 am</time>
                                                    </a>
                                                </div>
                                            </footer>
    
                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
    
                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>
                                    </li>

                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="{{asset('frontend/images/author3.jpg')}}" class="avatar" alt="image">
                                                        <b class="fn">Sarah Taylor</b>
                                                        <span class="says">says:</span>
                                                    </div>
        
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
        
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
        
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                </ol>
                            </li>

                            <li class="comment">
                                <article class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="{{asset('frontend/images/author2.jpg')}}" class="avatar" alt="image">
                                            <b class="fn">John Doe</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <time>April 24, 2021 at 10:59 am</time>
                                            </a>
                                        </div>
                                    </footer>

                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>

                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </article>

                                <ol class="children">
                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="{{asset('frontend/images/author4.jpg')}}" class="avatar" alt="image">
                                                    <b class="fn">James Anderson</b>
                                                    <span class="says">says:</span>
                                                </div>
    
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time>April 24, 2021 at 10:59 am</time>
                                                    </a>
                                                </div>
                                            </footer>
    
                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
    
                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>
                                    </li>
                                </ol>
                            </li>
                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>

                            <form class="comment-form">
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span>
                                    Required fields are marked 
                                    <span class="required">*</span>
                                </p>
                                <p class="comment-form-comment">
                                    <label>Comment</label>
                                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="comment-form-author">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" id="author" name="author" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" id="email" name="email" required="required">
                                </p>
                                <p class="comment-form-url">
                                    <label>Website</label>
                                    <input type="url" id="url" name="url">
                                </p>
                                <p class="comment-form-cookies-consent">
                                    <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                </p>
                            </form>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_luvion_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            @foreach ($recent_blogs as $blog)
                            <article class="item">
                                <a href="{{route('blogdetails', $blog->slug)}}" class="thumb">
                                    <span class="fullimage cover" role="img" style="background-image: url({{asset('uploads/' . $blog->thumbnail)}});"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">{{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}</time>
                                    <h4 class="title usmall"><a href="{{route('blogdetails',  $blog->slug)}}">{{$blog->title}}</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                            @endforeach
                            

                            
                        </section>

                        <section class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent Posts</h3>

                            <ul>
                                @foreach ($recent_blogs as $blog)
                                <li><a href="{{route('blogdetails', $blog->slug)}}">{{$blog->title}}</a></li>
                                @endforeach
                                
                            </ul>
                        </section>

                        {{-- <section class="widget widget_archive">
                            <h3 class="widget-title">Archives</h3>
                            <ul>
                                <li><a href="#">May 2021</a></li>
                                <li><a href="#">April 2021</a></li>
                                <li><a href="#">June 2021</a></li>
                            </ul>
                        </section> --}}

                        {{-- <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>

                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </section> --}}

                        {{-- <section class="widget widget_meta">
                            <h3 class="widget-title">Meta</h3>

                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </section> --}}

                        {{-- <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>

                            <div class="tagcloud">
                                <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Luvion <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                            </div>
                        </section> --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

    <!-- Start Account Create Area -->
    <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for an account in minutes</h2>
                <p>Get your Luvion account today!</p>
                <a href="login.html" class="btn btn-primary">Get Your Luvion Account</a>
            </div>
        </div>
    </section>
    <!-- End Account Create Area -->
@endsection