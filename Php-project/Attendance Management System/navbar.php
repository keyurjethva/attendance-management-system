<div class="about-header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container text-uppercase">
            <a class="navbar-brand text-white" href="index.php">Attendance Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="login.php">
                            <i class="fas fa-sign-in-alt" style="color: #fff;">Login</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="about-header-section">
        <div class="center-div">
            <h1>Attendance Management System</h1>
            <div class="line"></div>
        </div>
    </section>
</div>




<!-- ============== header section start =================== -->





<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Poppins:wght@700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
    }

    body {
        font-family: 'Noto Serif', serif;
        font-family: 'Poppins', sans-serif;

    }

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: rgba(35, 35, 85);
    }

    /* rgba(35,35,85) */
    span {
        font-size: 0.9rem;
        color: #757373;
    }

    h6 {
        font-size: 1.1rem;
        color: rgb(24, 24, 49);
    }

    .about-header {
        width: 100%;
        height: 90vh;
        margin-top: 5%;
        background-image: url('./img/bgimd.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
    }

    .about-header::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
        opacity: 0.4;
        z-index: -1;
    }

    .center-div {
        width: 100%;
        height: auto;
        position: absolute;
        top: 30%;
        transform: translate(3%, 5%);
    }

    .about-header-section h1 {
        width: 100%;
        height: inherit;
        color: blsck;
        text-align: center;
        position: relative;
    }

    .line {
        width: 300px;
        height: 3px;
        background: #e27730;
        margin: 10px auto;
        border-radius: 5px;
        animation: animate 6s linear infinite;
    }

    @keyframes animate {
        0% {
            width: 0;
        }

        70% {
            width: 30%;
            background-color: #FDC938;

        }

    }

    /* About-Container  Header */
    .about-container {
        display: flex;
        align-items: center;
        padding: 5vw 8vw 2vw 8vw;

    }

    .about-container .about-img {
        width: 80%;
        padding-right: 60px;
    }

    .about-container .about-img img {
        width: 90%;
    }

    .about-container .about-text {
        width: 40%;

    }

    .about-container .about-text h2 {
        color: #101c32;
        padding-bottom: 15px;
    }

    .about-container .about-text p {
        color: #686f7A;
        font-weight: 300;
    }

    .about-container .about-text .about-features {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        align-items: flex-start;
    }

    .about-container .about-text .about-features img {
        width: 100px;
        background-size: cover;
        background-position: center;
        margin-right: 50px;
    }

    .about-container .about-text .about-features .features-text {
        width: 90%;
    }

    .about-container .about-text .about-features .features-text h5 {
        font-size: 16px;
        color: #293029;
    }

    .img-header {
        margin-top: 20px;
        display: flex;
    }

    .img-header .imgbx img {
        height: 50vh;
        width: 80%;
    }
</style>