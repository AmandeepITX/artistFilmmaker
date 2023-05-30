@extends('layouts.app-with-header-footer-about')
@section('title', 'About')
@section('content')
<div class="about-us">
    <div class="container">
        <div class="about-section1">
            <div class="row">
                <div class="col-md-7 ">
                    <div class="aboutleft">
                        <h2>About Us</h2>
                        <p>Hello, and welcome! I'm Austin Shalt, founder of the American Heroes Appreciation Program
                            (AHAP). I'm a REALTOR® and real estate inspector in Borne, Texas, who takes every
                            opportunity I can to give back to the community of heroes that I respect and appreciate.
                            Though I've never served myself, I've always idolized police officers and veterans since I
                            was a small child, especially those who have served in World War I. Every day, from the
                            moment an officer or military service member dons their uniform, they put their lives at
                            risk so that we don't have to sacrifice our safety, freedom, peace of mind, and everything
                            we love and cherish. Firefighters don't think twice about charging into a burning building
                            to save people, knowing full well that they might not make it out alive - and some don't.
                            Yet they still come to our rescue without a moment's hesitation.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-section1-img">
                        <img src="./img/Austin-Shalit-cutout.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section2">
        <div class="row">
            <div class="col-md-6">
                <div class="about-section2-img">
                    <img src="./img/about.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-section2-text">
                    <p>We owe our heroes a great deal, and I designed AHAP with the sole purpose of showing
                        appreciation, reminding our heroes that we acknowledge their sacrifices and that we
                        genuinely care about them. The added benefit is that AHAP acts as free advertising to
                        participating businesses, which can help our recently crippled economy and community get
                        back on their feet.
                    </p>
                    <p>
                        I came up with AHAP when I saw an advertisement for a real estate scam popped up on my
                        Facebook feed. It promised to give money back to our heroes through a rebate when they buy a
                        home and through donations to their charity. After seeing the miniscule total amount that
                        they'd donated after all the years they'd been providing the rebate, it angered me to see
                        how they used the idea of helping heroes to steal what should be donation funds. It led me
                        to begin asking veterans in the community if they'd ever received help from a veteran's
                        charity or knew someone who had. To no surprise, not one veteran I spoke to knew of anyone
                        who ever received assistance from one of these "charities" that continue to rake in millions
                        of dollars a year.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section3">
<div class="container">
        <div class="row">
            <div class="col-md-6 white-bg">
                <div class="about-section3-text aboutlefttxt">
                    <p> I designed AHAP to be scam-proof. To accomplish this, I made sure there was no money
                        collection from any source involved. The businesses advertise for free. When you sign up,
                        you'll receive their benefits for free. And all expenses from the website design,
                        development, and hosting fall on my proud shoulders to pay. At AHAP, we encourage the
                        community to patronize these businesses that offer discounts and free services to our
                        veterans, even if they're civilians who don't receive the benefits. The more we encourage
                        businesses to do good by our heroes, the more businesses will hop on board! Just as we
                        appreciate our heroes, we appreciate those who give back to them. Thank you for your service
                        - now, let us serve you.</p>
                </div>
            </div>
            <div class="col-md-6 red-bg">
                <div class="about-section3-text about-section-text">
                    <h2> The businesses advertise for free. When you sign up, you'll receive their benefits for
                        free. </h2>
                        <div class="more-btn">
                        <a  href="{{ route('business-signup') }}">SIGN UP TODAY</a>
                    </div>
                </div>
                <div>
                    <a></a>
                </div>
            </div>
        </div>
</div>
    </div>

<div class="common-bg-2">
    <div class="eligable">
        <div class="container">
            <div class="stars2"> <img src="./img/stars.png"></div>
            <div class="sub-title-line">
                <div></div>
                <div></div>
            </div>
            <h2>WHO IS ELIGABLE</h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="eligable-section-1">
                        <div class="military">
                            <h3>MILITARY</h3>
                            <p>You are eligible if you are currently serving or previously served and were honorably
                                discharged from the Air Force, Army, Coast Guard, Marines, Navy or National Guard.
                            </p>
                            <ul>
                                <li>Active duty service members</li>
                            
                                <li> Veterans & Retired</li>
                                <li>Reservists</li>
                                <li> Military academies</li>
                            </ul>
                        </div>
                        <div class="fire firelist">
                            <h3>FIRE</h3>
                            <p>You are eligible if you are a full-time or volunteer firefighter.</p>
                            <h4>This includes:</h4>
                            <ul>
                                <li>Active and Retired</li>
                                <li>Municipal fire departments</li>
                                <li>National Parks Service</li>
                                <li>US Forest Service</li>
                                <li>Bureau of Land Management</li>
                                <li>Active and former Fire and Law Enforcement</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="eligable-section-2">
                        <div class="fire">
                            <h3>LAW ENFORCEMENT</h3>
                            <p>You are eligible if you are a federal, state or local law enforcement officer.</p>
                            <h4>State & Local:</h4>
                            <ul style="margin-bottom:0px;">
                                <li>Active and Retired</li>
                                <li>State police & highway patrol</li>
                                <li>Sheriff’s departments</li>
                                <li>City police departments</li>
                                <li>Correctional facilities</li>
                            </ul>
                            <h4>Federal</h4>
                            <ul>
                                <li>Active and Retired</li>
                                <li> Department of Justice, inc. FBI, ATF, DEA, BOP & US Marshals</li>
                                <li>Homeland Security, inc. ICE, TSA, CBP & Air Marshals</li>
                                <li>US Capital Police</li>
                                <li>Other federal officers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="difference-btn">
                        <a href="#">MAKE A DIFFERENCE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="bottom-menu">
                <ul>
                    <li><a class="{{ request()->routeIs('discounts-free-services') ? ' active' : '' }}" aria-current="page" href="{{ route('discounts-free-services') }}">DISCOUNTS & FREE SERVICES</a></li>
                    <li><a class="{{ request()->routeIs('business-signup') ? ' active' : '' }}" href="{{ route('business-signup') }}">LIST YOUR BUSINESS</a></li>
                    <li> <a class="{{ request()->routeIs('user-signup') ? ' active' : '' }}" href="{{ route('user-signup') }}">HERO SIGN UP</a></li>
                    <li><a class="{{ request()->routeIs('contact-us') ? ' active' : '' }}" href="{{ route('contact-us') }}">CONTACT US</a></li>
                    <li> <a class="{{ request()->routeIs('about-ahap') ? ' active' : '' }}" href="{{ route('about-ahap') }}">ABOUT AHAP</a></li>
                </ul>
            </div>
            <div class="bottom-text ">
                <p>Paid and founded by Austin Shalit REALTORS</P>
                <ul>
                    <li><a href="{{ route('contact-us') }}">Contact</a></li> |
                    <li> <a href="{{ route('about-ahap') }}">About Us</a></li>|
                    <li> <a href="{{ route('legal') }}">Legal </a></li> |
                    <li> <a href="{{ route('privacy-policy')}}">Privacy Policy </a></li>
                </ul>
                <P>American Heroes Appreciation Program. © 2022 All Rights Reserved</p>
            </div>
        </div>
    </footer>
</div>
@endsection