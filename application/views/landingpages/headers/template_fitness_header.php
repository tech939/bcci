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

ul {
	list-style: none;
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
    background: #ff6716;
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
    border: 2px solid #ff6716;
    background-color: rgba(255, 103, 22, 0.1);
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
    border: 2px solid #ff6716;
    color: #ff6716;
    background-color: rgba(255, 103, 22, 0.1);
    position: relative;
    padding: 15px 22px 15px;
    min-width: 220px;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
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
    background: #ff6716;
    text-align: center;
    margin-right: 10px;
    display: -webkit-box;
    display: flex;
    border: 4px solid rgba(156, 97, 65, 0.88);
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
    z-index: 2;
}

.landing-template .banner-text-block {
	max-width: 750px;
	color: #fff;
	margin: 0 auto;
    padding: 0 15px;
}

.banner-text-block h2 {
	font-size: 60px;
	padding-bottom: 20px;
	margin-bottom: 20px;
	position: relative;
}

.banner-text-block h2:after {
	content: '';
	width: 30%;
	height: 2px;
	background-color: #ff6716;
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
}

/*about us section style start*/

.about-us-section {
	position: relative;
}

.about-us-content {
	position: relative;
}
.about-us-content:before {
    content:'';
    width: 40%;
    height:50%;
    background:#ddd;
    position:absolute;
    left: 0;
    top: 50%;
    opacity:0.3;
    transform:translateY(-50%) skewY(-10deg);
}

.fitness-template .about-us-content:before {
    width: 52%;
    left: auto;
    right: 0;
    background:#ff6716;
    opacity:1;
}

.about-us-image-block {
	position: absolute;
    right: -10px;
    top: 0;
    display: flex;
    height: 100%;
    background-size: cover;
}
.about-us-image-block:after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    width: 102%;
    height: 110%;
    background: #333;
    opacity: 0.1;
    border-radius: 10px;
    transform: translateY(-50%);
}
.about-us-image {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    z-index: 1;
}

.about-us-content .text-block {
	padding: 60px 0;
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

.fitness-template .about-us-image-holder {
    position: relative;
    overflow: hidden;
    height: 100%;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.fitness-template .about-us-image {
    position: relative;
}

/*about us section style endd*/



/*Products section style start*/

.products-block-section .products-block {
	min-height: 450px;
	width: 100%;
	position: relative;
}

.products-block-section .products-block:before {
	content: '';
	background: -moz-linear-gradient(top,  rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.89) 84%, rgba(0,0,0,0.89) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0.35) 0%,rgba(0,0,0,0.89) 84%,rgba(0,0,0,0.89) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  rgba(0,0,0,0.35) 0%,rgba(0,0,0,0.89) 84%,rgba(0,0,0,0.89) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000', endColorstr='#e3000000',GradientType=0 ); /* IE6-9 */
	position: absolute;
	height: 100%;
	width: 100%;
	z-index: 1;
	opacity: 0.2;
}



.products-block-section .products-block .product-img {
	position: absolute;
	height: 100%;
	width: 100%;
	background-position: center;
	background-size: cover; 
}

.products-block-section .product-title {
	z-index: 2;
    position: absolute;
    bottom: 20px;
    left: 20px;
}
.products-block-section .product-title h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 500;
    padding-left:15px;
    color: #fff;
    position:relative;
}

.products-block-section .product-title h3:before {
    content:'';
    position:absolute;
    left:0;
    top:0;
    height:100%;
    width:3px;
    background: #ff6716;
}


.fitness-template .products-block-section .products-block:before {
    opacity: 0.5;
}

.fitness-template .products-block {
    transition:all 0.3s ease-in-out;
}
.fitness-template .products-block {
    border-radius:5px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0, 0, 0, 0.3);
}
.fitness-template .products-block-section .col-sm-4:hover .products-block:before {
    background: -moz-linear-gradient(top,  rgba(125,185,232,0) 0%, rgba(193,142,123,0) 52%, rgba(255,103,22,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(125,185,232,0) 0%,rgba(193,142,123,0) 52%,rgba(255,103,22,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(125,185,232,0) 0%,rgba(193,142,123,0) 52%,rgba(255,103,22,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007db9e8', endColorstr='#ff6716',GradientType=0 ); /* IE6-9 */
}

.fitness-template .products-block:hover {
    transform:scale(1.03);
}
.fitness-template .products-block:hover .landing-btn-sm {
    margin-bottom: 0;
    opacity:1;
    visibility:visible;
}

/*Products section style end*/





.form-container {
    max-width:750px;
    margin: 0 auto;
    padding:40px;
    border-radius:10px;
    box-shadow: 0 0 40px #33333340;
}

.landing-input {
    width: 100%;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #ccc;
    min-height: 60px;
    padding: 10px;
    font-size: 16px;
    font-weight: 500;
}




.clients-logo-section {

}

.logo-slider {
	text-align: center;
}

.logo-slider li {
	display: inline-block;
	margin: 0 10px;
    position: relative;
}
.logo-slider li img {
	max-width: 250px;
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
/*Reponsive style start*/

@media (max-width: 767px) {

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

}

/*Reponsive style end*/


/*Edit style css end*/
    </style>
</head>
<body>