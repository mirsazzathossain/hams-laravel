<div>
@include('breadcrumbs', ['route' => 'Contact'])
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Contact</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">{{$hospital['contact_page_heading']}}
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">{{$hospital['contact_page_details']}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="form-title">
                            <h2>Feel free to contact us for any query.</h2>
                        </div>
                        <form class="form" wire:submit.prevent='submit'>
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input wire:model="name" id="name" name="name" type="text" placeholder="Your Name" required="required">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror   
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input wire:model="subject" id="subject" name="subject" type="text" placeholder="Your Subject" required="required">
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror   
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input wire:model="email" id="email" name="email" type="email" placeholder="Your Email" required="required">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input wire:model="phone" id="phone" name="phone" type="text" placeholder="Your Phone" required="required">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <textarea wire:model="message" id="message" name="message" placeholder="Your Message"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button class="btn ">Submit Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <h2 class="main-title">Contact Information</h2>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3>Medical Address</h3>
                            <ul>
                                <li>{{$hospital['address']}}/li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>Opening hours</h3>
                            
                            <ul>
                                @foreach ($hospital['opening_hours'] as $schedule)
                                <li>{{$schedule}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="bi bi-envelope" style="vertical-align: 12px;"></i>
                            </div>
                            <h3>Email Support</h3>
                            <ul>
                                <li><a href="mailto:medicapps@gmail.com">{{$hospital['email']}}</a></li>
                            </ul>
                        </div>
                        <div class="single-info contact-social">
                            <h3>Social contact</h3>
                            <div class="info-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <ul>
                                <li><a href="{{$hospital['social_links'][0]}}"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="{{$hospital['social_links'][1]}}"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="{{$hospital['social_links'][2]}}"><i class="bi bi-linkedin"></i></a></li>
                                <li><a href="{{$hospital['social_links'][3]}}"><i class="bi bi-pinterest"></i></a></li>
                                <li><a href="{{$hospital['social_links'][4]}}"><i class="bi bi-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>