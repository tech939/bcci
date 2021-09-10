<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $campaign['page_title']; ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap');
@import url('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

.landing-template h1,
.landing-template h2,
.landing-template h3,
.landing-template h4,
.landing-template h5,
.landing-template h6,
.btn.landing-btn {
	font-family: 'Montserrat', sans-serif;
}

.bg-light {
    background-color: #f4f4f4;
}

.bg-grey {
    background-color: #f4f4f4;   
}

ul {
	list-style: none;
}



.push-notification{
    text-align:left;
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
}
.push-notification input[type=checkbox] {
    width: auto;
    min-height: auto;
    margin: 3px 5px 0 0;
}
.push-notification label{
    font-size: 12px;
}

.text-block {
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    line-height: 34px;
}
.text-block ul {
    margin: 0 0 30px;
    padding:0;
}

.text-block ul li {
    position:relative;
    font-size:18px;
    line-height:34px;
    padding-left: 30px;
    color:#666666;
}
.text-block ul li:before {
    content:'';
    width:15px;
    height:1px;
    left:0;
    top:15px;
    background: #3144d7;
    position:absolute;
}
.landing-template {
	position: relative;
	overflow: hidden;
	/*border:2px solid #ccc;*/
}

.bg-light {
	background-color: #f4f4f4; 
}

.btn.landing-btn {
	border-radius: 100px;
    border: 2px solid #3144d7;
    background-color: rgba(49, 68, 215, 0.1);
    position: relative;
    padding: 15px 22px 15px 70px;
    min-width: 220px;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
}

.btn.landing-btn.landing-btn-blue {
    border: 2px solid #132031;
    color: #132031;
    background-color: rgba(19, 32, 49, 0.1);
}

.btn.landing-btn.landing-btn-blue:before {
    background-color: #132031;
}

.btn.landing-btn:before {
	content: '';
    width: 20%;
    height: 2px;
    position: absolute;
    top: 50%;
    left: 20px;
    background-color: #fff;
    transform: translateY(-50%);
}

.btn.btn-primary.landing-btn-sm {
    font-size:14px;
    border: none;
    background: #132031;
    min-width: auto;
    padding: 10px 20px;
    padding-left: 62px;
    opacity:0;
    visibility:hidden;
    margin-bottom: -35px;
    transition:all 0.3s ease-in-out;
}

.landing--submit-btn {
	border-radius: 100px;
    border: 2px solid #3144d7;
    color: #3144d7;
    background-color: rgba(49, 68, 215, 0.1);
    position: relative;
    padding: 15px 22px 15px;
    min-width: 220px;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
}

.inline-btn {
    color: #3144cf;
    font-size:18px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
}



.l-padding-lg {
	padding: 100px 0;
}
.l-padding-md {
	padding: 60px 0;
}

.landing-title-block h2 {
	font-size: 40px;
	font-weight: 400;
	text-transform: uppercase;
}
.landing-title-block h2 span {
	font-weight: 600;
}

.landing-template .header-banner {
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
	width: 100%;
	height: 100vh;
	min-height: 650px;
	display: flex;
	align-items: center;
	position: relative;
    overflow: hidden;
}


.landing-template .header-banner .image-holder-block {
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}
.landing-template .header-banner .image-holder-block:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#000000+0,000000+100&0.89+18,0.35+100 */
    background: -moz-linear-gradient(top,  rgba(0,0,0,0.89) 0%, rgba(0,0,0,0.89) 18%, rgba(0,0,0,0.35) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0.89) 0%,rgba(0,0,0,0.89) 18%,rgba(0,0,0,0.35) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(0,0,0,0.89) 0%,rgba(0,0,0,0.89) 18%,rgba(0,0,0,0.35) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3000000', endColorstr='#59000000',GradientType=0 ); /* IE6-9 */
    z-index: 1;
}
.landing-template .header-banner .image-holder-block img {
    margin: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
}

.landing-template .top-content-bar {
	max-width: 1140px;
    width: 100%;
    color: #fff;
    text-align: center;
    padding: 10px 15px;
	position: absolute;
	top: 0;
	left: 50%;
	transform: translateX(-50%);
	z-index: 3;
}
.landing-template .top-content-bar h2 {
	display: inline-block;
}
.landing-template .top-content-bar a {
    display: flex;
    float: right;
    align-items: center;
    color: #fff;
    font-weight: 500;
    font-size: 16px;
    position: absolute;
    right: 20px;
    top: 20px;
}
.top-content-bar .call-number span {
	height: 40px;
    width: 40px;
    border-radius: 50px;
    background: #3144d7;
    text-align: center;
    margin-right: 10px;
    display: flex;
    border: 4px solid rgba(255, 255, 255, 0.10);
}
.top-content-bar .call-number span img {
	max-width: 15px;
	vertical-align: middle;
	display: block;
	margin: 0 auto;
}
.landing-template .landing-banner-content {
	display: flex;
	align-items: center;
	width: 100%;
	height: 100%;
	position: relative;
    z-index: 1;
}

.landing-template .banner-text-block {
	max-width: 850px;
	color: #fff;
	margin: 0 auto;
    padding: 0 15px;
}

.banner-text-block h2 {
	font-size: 40px;
	padding-bottom: 20px;
	margin-bottom: 20px;
	position: relative;
}

.banner-text-block h2:after {
	content: '';
	width: 30%;
	height: 2px;
	background-color: #3144d7;
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
}

.landing-template .banner-text-block p {
	color: #fff;
}



.image-landing-container {
    position: relative;
    overflow: hidden;
    height: 100%;
    width: 100%;
}
.image-landing-container .image-holder-block {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}
.image-landing-container .image-holder-block img {
    width: 100%;
    object-fit: cover;
    height: 100%;
}


.image-landing-container .image-holder-block.img-width-a img {
    width: 100%;
    object-fit: cover;
    height: 100%;
}

.form-container {
    background-color: #fff;
    max-width:750px;
    margin: 0 auto;
    padding:60px;
    border-radius:10px;
    box-shadow: 0 0 40px #33333340;
}

.landing-input {
    width: 100%;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #ccc;
    min-height: 60px;
    padding: 10px;
    font-size: 16px;
    font-weight: 500;
}







/*Edit style css start*/

.landing-edit-block {
    position: relative;
    outline:transparent;
}
.landing-edit-block:hover {
    position: relative;
    outline:1px dashed #333;
}
.landing-edit-block .edit-element-btn {
    display: none;
    position: absolute;
    top:0;
    left:0;
    background:#f60b00;
    border: none;
    height:30px;
    width:30px;
    color: #fff;
    border-radius: 50px;
    z-index: 99;
    font-size: 13px;
    text-align: center;
    line-height: 30px;
}
.landing-edit-block:hover .edit-element-btn {
    display:block;
}

.image-update-btn-edit {
    position: absolute;
    top:0;
    left:0;
    background:#f60b00;
    border: none;
    height:30px;
    width:30px;
    color: #fff;
    border-radius: 50px;
    z-index: 99;
    display: none;
}

.image-update-btn-edit.image-update-btn-edit-right{
    left:auto;
    right: 0;
}

.image-edit-block {
    position: relative;
    outline:transparent;
}
.image-edit-block:hover {
    position: relative;
    outline:1px dashed #333;
}
.image-edit-block:hover .image-update-btn-edit {
    display:block;
}

.image-holder-block .image-update-btn-edit {
    display: block;
}

/*Edit style css end*/




/*About us resturant start*/


.about-us-section {
    position: relative;
    z-index: 1;
}

.about-us-section:before {
    content:'';
    background:#dde5f3;
    position:absolute;
    top: 7%;
    left:0;
    width:100%;
    height: calc(90% - 7%);
}

.about-us-section .about-container {
    box-shadow:0 0 40px rgba(0, 0, 0, 0.5);
    margin-top: -7%;
}

.about-left-content {
    position:relative;
    padding:50px;
}
.about-left-content .about-bg-img {
    position:absolute;
    overflow:hidden;
    left:0;
    top: 0;
    height:100%;
    width:100%;
}

.about-left-content p, .about-left-content p p {
    color: #ffffff;
}

.p-text-white p{
color: #ffffff;
}
.about-left-content .about-bg-img:before {
    position:absolute;
    z-index:1;
    content:'';
    height:100%;
    width:100%;
    background:rgba(49, 68, 215, 0.8);
    top:0;
    left:0;
}

.about-left-content .text-block {
    position: relative;
    z-index:2;
}

.about-left-content .text-block p,
.about-left-content .text-block  ul li {
    color:#fff !important;
}

.about-left-content .text-block  ul li:before {
    background:#fff !important; 
}

.about-bg-img {
    position: relative;
    overflow: hidden;
    height:100%;
    width:100%;
}

.about-bg-img img {
    position: absolute;
    height: auto;
    width: 100%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}


/*About us resturant end*/




/*spaciality section start*/

.image-container {
    padding-bottom: 5px;
    height: 100%;
}

.featured-image {
    position:relative;
    min-height: 700px;
    overflow: hidden;
}

.featured-image img {
    position:absolute;
    overflow:hidden;
    left:0;
    top: 0;
    height:100%;
    width:auto;
}

.tile-images {
    padding:0;
    display:flex;
    margin: 0;
    flex-flow: wrap;
}

.tile-images li {
    padding: 5px;
    min-height: 360px;
    flex: 0 0 50%;
    max-width: 50%;
    overflow:hidden;
    padding-top: 0;
}

.image-holder-block {
    position:relative;
    height:100%;
    width:100%;
    overflow: hidden;
}

.image-holder-block img {
    position:absolute;
    overflow:hidden;
    left:0;
    top: 0;
    height:100%;
    width:auto;
}

/*spaciality section end*/


@media (max-width: 999px) {
    .tile-images li {
    min-height: 250px;
}
}
@media (max-width: 767px) {
.tile-images {
    display:block;
}

        .tile-images li {
        min-height: auto;
        width: 100%;
        margin: 0 auto;
        max-width: 80%;
        text-align: center;
        }

        .tile-images li .image-holder-block {
            min-height: 200px;
        }

        .tile-images li .image-holder-block img {
            width: 100%;
            height: auto;
        }

    .landing-template .header-banner {
        display: block;
    }

    .landing-template .top-content-bar {
        position:relative;
        left: 0;
        transform: none;
    }

    .landing-template .landing-banner-content {
        display: block;
    }

    .btn.landing-btn {
        font-size: 16px;
        padding: 15px 22px 15px 80px;
    }

    .btn.landing-btn:before {
        width: 15%;
    }

    .landing-template .top-content-bar h2 {
        margin-top: 5px;
    }

    .landing-template .top-content-bar a {
        float: none; 
        position: relative;
        right: 0; 
        top: 0; 
        margin: 10px auto 0;
        justify-content: center;
    }
    .landing-template .header-banner {
        height: auto;
        display: block;
    }
    .landing-template .header-banner .image-holder-block img {
        width: auto;
    }
    .banner-text-block h2 {
        font-size: 30px;
        line-height: 40px;
    }
    .landing-title-block h2 {
        font-size: 30px;
    }
    .image-container-full img {
        height: 100%;
        width: auto;
    }
    .form-container {
        margin-bottom: 30px;
        padding: 20px;
    }

    .l-padding-lg,
    .l-padding-md {
       padding: 30px 0;
    }
    .about-us-content .text-block {
       padding: 30px 0;
    }
    .fitness-template .about-us-content:before {
       display: none;
    }
    .fitness-template .products-block {
        margin-bottom: 30px;
    }

    .feature-news-section .featured-img {
        min-height: 250px;
    }
    .feature-news-section {
        margin-bottom: 30px;
    }
    .feature-news-section .text-block h4 {
        font-size: 24px;
    }
    .inline-btn {
        font-size: 16px;
    }

        .logo-slider {
    display: block;
    justify-content: center;
}

    .logo-slider li {
      max-width: 100%;
      margin-bottom: 30px;
}
.products-block-section .products-block {
    min-height: 350px;
    margin-bottom: 30px;
}

.about-us-image-block {
    position: relative;
    right: 0;
    display: block;
    min-height: 350px;
}

.image-landing-container {
    min-height: 350px;
}

}

/*Reponsive style end*/
</style>
</head>
<body>