@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            About
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            
            <p class="intro">
				<img class="avt" src="{{ url('/img/phapavt.png') }}" alt="Duong Dieu Phap">
				<i class="icon-quotes-left"></i> Hello! My full name is Dương Diệu Pháp.<br/>
				I am {{date('Y') - 1991}}-year-old Vietnamese developer. <i class="icon-quotes-right"></i><br/><br/>
			</p>
			<p>
				I am working as Senior UI/UX Developement Specialist for <a href="http://www.ascentis.com.sg" target="_blank" rel="noopener noreferrer" title="Ascentis Private Limited"><strong>Ascentis Private Limited</strong></a> - the leader in powering CRM & Loyalty programs for leading brands in Singapore and the region.
			</p>
			<p>
				Besides that, I have over 5 years of experiences in developing Windows desktop applications. I love to build little ultilities and I'm glad to receive both positive and negative feedback from the people.
			</p>

			<p>
				<a class="btn btn-primary" href="https://www.google.com/search?q=&quot;duong+dieu+phap&quot;" target="_blank" rel="noopener noreferrer" title="Find me on the Internet">
					<span class="icon-search"></span>
					<span>Find me on the Internet</span>
				</a>
			</p>


			<div class="personal-info links">
				<h3 class="fs-h3 mt-5 mb-3">Experiences</h3>
				<ul>
					<li><strong>11/2017 - present:</strong> Senior UI/UX Developement Specialist at <a target="_blank" rel="noopener noreferrer" href="http://www.ascentis.com.sg">Ascentis Private Limited</a></li>	
					<li><strong>6/2015 - 11/2017:</strong> Front-end developer at <a target="_blank" rel="noopener noreferrer" href="http://aleph-labs.com">Aleph Labs</a></li>
					<li><strong>3/2012 - 5/2015:</strong> Lead engineer at <a target="_blank" rel="noopener noreferrer" href="http://www.poste-vn.com">Poste Co., Ltd</a></li>
					<li><strong>11/2011 - 3/2012:</strong> iOS Developer at Universal Information Services Corp. (UIS)</li>
					<li><strong>2009 - 2014:</strong> Student of <a href="http://www.fit.hcmus.edu.vn/vn/Default.aspx?tabid=416" target="_blank" rel="noopener noreferrer">The Faculty of Information Technology (FIT)</a> of <a href="https://en.hcmus.edu.vn/" target="_blank" rel="noopener noreferrer">Ho Chi Minh University of Science</a></li>
				</ul>

				<h3 class="fs-h3 mt-5 mb-3" id="contact">Contact me</h3>
				<ul>
					<li><strong>Email: </strong><a href="mailto:phap@imageglass.org" target="_blank" rel="noopener noreferrer">phap@imageglass.org</a></li>
					<li><strong>Linkedin: </strong><a href="http://linkedin.com/in/duongdieuphap" target="_blank" rel="noopener noreferrer">linkedin.com/in/duongdieuphap</a></li>
					<li><strong>Github: </strong><a href="https://github.com/d2phap" target="_blank" rel="noopener noreferrer">github.com/d2phap</a></li>
					<li><strong>Dribbble: </strong><a href="https://dribbble.com/d2phap" target="_blank" rel="noopener noreferrer">dribbble.com/d2phap</a></li>
					<li><strong>Facebook: </strong><a href="http://facebook.com/d.d.p.h.a.p" target="_blank" rel="noopener noreferrer">facebook.com/d.d.p.h.a.p</a></li>
					<li><strong>Skype: </strong><a href="skype:d2phap">d2phap</a></li>
				</ul>
			</div>


        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("modules.aside.article-list")
        </aside>
    </div>
</section>

@stop