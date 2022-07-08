<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeelHome</title>
</head>



<body>
    <header>
        <div>
            <button id="menu-btn">Menu</button>
            <nav>
                <div class="logo">
                    <span><span class="feel">Feel</span><span class="home">Home</span></span>
                    <div id="toggle">X</div>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_header">
                <div>
                    <h1>
                        <span class="main_feel">Feel</span>
                        <span class="main_home">Home</span>
                    </h1>
                    <p>You are warmly welcome to comfortable Home</p>
                    <div>
                        <button id="this"><span>Read more</span><ion-icon name="arrow-forward-outline" style="margin-left:0.2em;"></ion-icon></button>
                        <button>Rate us</button>
                    </div>
                </div>
                <ion-icon id="whatsapp-logo" name="logo-whatsapp"></ion-icon>
            </div>
        </div>
    </header>




    <!-- about us -->
    <section class="section_1">
        <div class="service">
            <h2>ABOUT US</h2>
            <div>
                <div class="service_text">
                    <h3>OUR PURPOSE</h3>
                    <!-- there are correction to be made here -->
                    <ion-icon name="school-outline" style="display: block;font-size:60px;color:black;margin: auto;"></ion-icon>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officia velit, et voluptas corporis molestiae hic, rem quidem sequi temporibus nesciunt. Repellat blanditiis ut facilis? Architecto repellendus eaque animi explicabo?</p>
                    <button id="for_service"><span>Read more</span><ion-icon name="arrow-forward-outline" style="margin-left: 0.2em;"></ion-icon></button>
                </div>
                <div class="service_img">
                    <img src="resources/images/hug.jpg" alt="image">
                </div>
            </div>
        </div>
    </section>




    <!-- services -->
    <section class="section_2 ">
        <div>
            <h2>SERVICES</h2>
            <div class="main ">
                <div class="text ">
                    <h3>YOU'RE WELCOME</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam, enim perferendis minima quas sunt vero reprehenderit eveniet pariatur voluptate ipsa asperiores expedita sed veniam libero, sit reiciendis magnam deleniti accusantium
                        nemo praesentium blanditiis. Dolor officia totam ab al?</p>
                </div>
                <div class="forms ">
                    <form>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" placeholder="TiaPuo" required></td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td><input type="email" placeholder="tiapuo@gmail.com" required></td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td><input type="contact" placeholder="0546684004" required></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <select name="gender" id="gender">
                                        <option value="male" required>Male</option>
                                        <option value="female" required>Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hostels:</td>
                                <td>
                                    <select name="hostels" id="">
                                        <option value="E-step" required>E-STEP</option>
                                        <option value="forest" required>FOREST</option>
                                        <option value="Get-fund" required>GET-FUND</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>level:</td>
                                <td>
                                    <select name="levels" id="levels">
                                        <option value="L100" required>L100</option>
                                        <option value="L200" required>L200</option>
                                        <option value="L300" required>L300</option>
                                        <option value="L400" required>L400</option>
                                    </select>
                                </td>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" placeholder="submit"></td>
                                </tr>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <!-- rates us -->
    <section class="section_3 ">
        <div class="rate_container ">
            <h2>Most Popular Hostels</h2>
            <div class="img_container ">
                <div class="img_1 ">
                    <div><img src="./resources/images/hostelbeds2.jpg " alt="hostel image "></div>
                    <h4>Forest View Hostel</h4>
                    <div class="price-rate">
                        <div class="prices">
                            <p>Fees:</p>
                            <select name="prices" id="prices">
                                <option value="40.5">40.5</option>
                                <option value="30.5">30.5</option>
                                <option value="20.5">20.5</option>
                            </select>
                        </div>
                        <div class="ra ">Rates:
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="img_2 ">
                    <div><img src="./resources/images/hostelbeds2.jpg " alt="hostel image "></div>
                    <h4>E-Step Hostel</h4>
                    <div class="price-rate">
                        <div class="prices">
                            <p>Fees:</p>

                            <select name="prices" id="prices">
                                <option value="40.5">40.5</option>
                                <option value="30.5">30.5</option>
                                <option value="20.5">20.5</option>
                            </select>
                        </div>
                        <div class="ra ">Rates:
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="img_3 ">
                    <div><img src="./resources/images/hostelbeds2.jpg " alt="hostel image "></div>
                    <h4>Get-Fund Hostel</h4>
                    <div class="price-rate">
                        <div class="prices">
                            <p>Fees:</p>

                            <select name="prices" id="prices">
                                <option value="40.5">40.5</option>
                                <option value="30.5">30.5</option>
                                <option value="20.5">20.5</option>
                            </select>
                        </div>
                        <div class="ra ">Rates:
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div>
            <h2>GET IN TOUCH</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quisquam deleniti aut perferendis, possimus ratione aliquam unde. Nulla ad repellat magnam, alias ut similique! Delectus officia aspernatur, soluta id harum facilis, provident dignissimos
                enim in beatae repudiandae molestiae deleniti reprehenderit! Tenetur rerum temporibus atque harum quaerat amet error vel ea.</p>
            <div class="icons ">
                <a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-tiktok"></ion-icon>
                </a>

            </div>
        </div>
    </footer>
    <button class="top">Top</button>
</body>
<script src="resources/js/script.js "></script>

</html>
