@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career_detail.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career_detail_info.css') }}">
@endsection
@section('content')
<div id="site-content">
	<div id="content-slides">
		<div class="media-cover media-cover-dark">
		    @if ($detail_info->department == 'Engineering')
			<section class="image_engineering"></section>
			@else
			<section class="image_security"></section>
			@endif
		</div>
		<div class="col-md-12">
			<div class="text-contrast">
				<div class="description detail_info last">
					<h2>{{$detail_info->position_name}}</h2>
					<p>{{$detail_info->office}}</p>
				</div>   
			</div>
		</div>
	</div>
	<div class="page-container-responsive lower-content">
        <section class="space-4">
            <div class="row position space-6">
                <div class="col-12">
                    <div>Founded in August of 2008 and based in San Francisco, California, Airbnb is a trusted community marketplace for people to list, discover, and book unique travel experiences around the world. Whether an apartment for a night, a castle for a week, or a villa for a month, Airbnb allows people to Belong Anywhere through unique travel experiences at any price point, in more than 34,000 cities and over 190 countries. We promote a culture of curiosity, humanity, and creativity through our product, brand, and, most importantly, our people.</div>
                    <div>&nbsp;</div>
                    <div>
                        <p><strong>Roles &amp; Responsibilities:</strong></p>
                        <p><span style="font-weight: 400;">As Airbnb continues to expand our business globally, we are always looking for the best and brightest to build our financial reporting infrastructure. The platform analyst is a key member of the Payments Finance organization that manages all payments and platform accounting for Airbnb.com. The platform analyst will be responsible for providing research, analytics, and reporting on the Airbnb platform financial data, and responsible for partnering with our finance engineering organization to drive improvements in finance data integrity and delivery. </span></p>
                        <p><span style="font-weight: 400;">As a payments finance team member, you will have broad exposure to various functions at Airbnb, including FP&amp;A, Engineering, Product, Customer Experience. &nbsp;The ideal candidate for this position will have a passion for data, strong technical skills in SQL or similar querying language, experience with data visualization software, strong understanding of GAAP, strong communication skills to influence engineering and business partners, and the ability to partner effectively across business functions. This position reports to the Senior Manager, Financial Insights &amp; Reporting.</span></p>
                        <p><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Platform BI Analyst&nbsp;</span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Drive testing and data validation for new product, pricing, and features launches to ensure our platform transactions are correctly represented in our financial system </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Drive testing and data validation on current financial data pipeline and work with engineering team to ensure timely delivery for monthly close </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Design and build data visualization and monitoring tools to support platform finance org. &nbsp;Own the delivery and communication of dashboard and insights to finance and product leadership </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Collaborate with the finance groups on data research relating to the preparation of accounting&nbsp;memos and business process documentation</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Support the monthly financial reporting and close process for the global revenue and payments function</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Preparing year-end audit schedules</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Assisting with various ad hoc research and analytics on our finance data platform </span></li>
                        </ul>
                        <p><span style="font-weight: 400;">Qualifications:</span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">4+ years of combined experience in a related field, preferably at a top tier company (Marketplace or platform technology companies is a plus)</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Expert SQL skills or similar querying language required </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Knowledge in data visualization software required, experience in Tableau is preferred</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Excel and modeling experience required</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Excellent problem-solving skills and experience analyzing high volume, multi-currency transactions in a global business environment</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">B.A. or B.S. in Accounting, Finance, Business Systems or a closely related discipline</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">CPA and strong knowledge of US GAAP preferred </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Strong interpersonal and team building skills - ability to work with a diverse team and impart change&nbsp;across functional and business boundaries</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Capable of handling multiple projects in a fast paced, hyper growth environment</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Desire to continuously improve and a positive, "can-do"&nbsp;approach</span></li>
                        </ul>
                    </div>
                    <h2>&nbsp;</h2><br>
                    <!--<a href="/careers/apply2/1206346?gh_src=" id="applyButton" class="btn btn-large btn-primary" style="position: relative; margin-top: -21px;">Apply Now</a>-->
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
