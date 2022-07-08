<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial scale=1.0">
    <title>FeelHome</title>
</head>



<body>
    <header>
        <div>
            <nav>
                <div class="logo">
                    <span><span class="feel">Feel</span><span class="home">Home</span></span>
                </div>
                <div class="links">
                    <ul>
                        <li><a class="first_child" href="#">Home</a></li>
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
                        <button id="this">Read more<ion-icon name="arrow-forward-outline" style="margin-left:0.2em;"></ion-icon></button>
                        <button>Rate us</button>
                    </div>
                </div>
                <div class="whatsapp-btn">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </div>
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
                    <button id="for_service">Read more<ion-icon name="arrow-forward-outline" style="margin-left: 0.2em;"></ion-icon></button>
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
                    <h3>YOU'RE WELCOME TO A SECOND HOME</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam, enim perferendis minima quas sunt vero reprehenderit eveniet pariatur voluptate ipsa asperiores expedita sed veniam libero, sit reiciendis magnam deleniti accusantium
                        nemo praesentium blanditiis. Dolor officia totam ab aliquam autem magni quibusdam odio dolore, expedita possimus corrupti molestias natus rem?</p>
                </div>
                <div class="forms ">
                    <form>
                        <div>
                            <label>Name:</label>
                            <input type="text " placeholder="SIEH RICHMOND " required>
                        </div>
                        <div>
                            <label>Email:</label>
                            <input type="email " placeholder="siehrichmond50@gmail.com " required>
                        </div>
                        <div>
                            <label>Contact:</label>
                            <input type="contact " placeholder="0546684004 " required>
                        </div>
                        <div>
                            <label>Gender:</label>
                            <select name="gender " id="gender " required>
                                <option value="male ">Male</option>
                                <option value="female ">Female</option>
                            </select>
                        </div>
                        <div>
                            <label>Hostel:</label>
                            <select name="hostels " id=" " required>
                                <option value="E-step ">E-STEP</option>
                                <option value="forest ">FOREST</option>
                                <option value="GET-FUND ">GET-FUND</option>
                            </select>
                        </div>
                        <div>
                            <label>level:</label>
                            <select name="levels " id=" " required>
                                <option value="L100 ">L100</option>
                                <option value="L200 ">L200</option>
                                <option value="L300 ">L300</option>
                                <option value="L400 ">L400</option>
                            </select>
                        </div>
                        <div>
                            <input type="submit " placeholder="submit">
                        </div>
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
                    <h4>HOSTEL A</h4>
                    <div style="display: flex;justify-content: center;align-items: center;padding: 5px 0; ">
                        <div style="display:flex;align-items: center; ">
                            <p>PRICE:</p>
                            <!-- <ul>
                                <li class="fi ">40.5
                                    <ion-icon style="cursor: pointer; " name="caret-down-outline "></ion-icon>
                                </li>
                                <li>50.5</li>
                                <li>60.5</li>
                            </ul> -->
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
                    <h4>HOSTEL A</h4>
                    <div style="display: flex;justify-content: center;align-items: center;padding: 5px 0; ">
                        <div style="display:flex;align-items: center; ">
                            <p>PRICE:</p>
                            <!-- <ul>
                                <li class="fi ">40.5
                                    <ion-icon style="cursor: pointer; " name="caret-down-outline "></ion-icon>
                                </li>
                                <li>50.5</li>
                                <li>60.5</li>
                            </ul> -->
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
                    <h4>HOSTEL A</h4>
                    <div style="display: flex;justify-content: center;align-items: center;padding: 5px 0; ">
                        <div class="prices" style="display:flex;align-items: center; ">
                            <p>PRICE:</p>
                            <!-- <ul>
                                <li class="fi ">40.5
                                    <ion-icon style="cursor: pointer; " name="caret-down-outline "></ion-icon>
                                </li>
                                <li>50.5</li>
                                <li>60.5</li>
                            </ul> -->
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
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-whatsapp"></ion-icon>
                <ion-icon name="logo-tiktok"></ion-icon>

            </div>
        </div>
    </footer>
</body>
<script src="resources/js/script.js "></script>

</html>
