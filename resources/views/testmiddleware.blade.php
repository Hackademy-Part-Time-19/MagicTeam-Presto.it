<x-layout>

    <div class="col-lg-8 mx-auto col-10 custom-style-html"
    style="border-radius:10px;display: flex;flex-wrap:wrap; align-items:center; justify-content:center; margin: 20px 10px 20px 10px;">
    <div style="margin: 20px 10px 20px 10px;width:480px;height:420px;display:flex;">
        <div id="carouselExampleIndicators" class="carousel slide carousel-custom"
            style="margin:20px; background: #FFFFFF;box-shadow: 0px 1px 12.6px rgba(0, 0, 0, 0.15);border-radius: 15px;align-item:center;justify-content:center;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1" style="background-color: #ED751E"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" style="background-color: #ED751E"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" style="background-color: #ED751E"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/prova2.png" class="d-block  "
                        alt=""style="border-radius:10px;width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="/img/prova1.png" class="d-block "
                        alt=""style="border-radius:10px;width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="/img/prova1.png" class="d-block "
                        alt=""style="border-radius:10px;width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #ffd401;padding:2px;border-radius:100%;"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"style="background-color: #ffd401;padding:2px;border-radius:100%;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div style="margin: 20px 10px 20px 10px;width:480px;height:380px;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:20px;">
        {{--  @if (count($articles) == 0)


            <div class="col-lg-8 mx-auto col-10 noarticle">
                <p>NON CI SONO ARTICOLI</p>
            </div>
        @else --}}
        @if ($category_id ?? '')


            @if ($category_id == 1)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryElettronica">
                        <svg width="32" height="24" viewBox="0 0 36 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.3333 0.666672C28.1767 0.666672 29.5917 2.07167 30.64 3.58334L30.995 4.11834L31.32 4.65167C31.4233 4.825 31.5217 4.99834 31.6167 5.165C32.9283 7.51 34.07 10.5717 34.825 13.5967C35.575 16.5983 35.99 19.7333 35.725 22.1983C35.4583 24.6733 34.1833 27.3333 31.3333 27.3333C28.7767 27.3333 26.7617 25.9667 25.125 24.6317L23.275 23.08C21.7367 21.82 20.0533 20.6667 18 20.6667C15.9467 20.6667 14.2617 21.82 12.7267 23.08L10.8767 24.63C9.23667 25.9667 7.22167 27.3333 4.66667 27.3333C1.815 27.3333 0.540003 24.6733 0.275003 22.1983C0.0116697 19.7317 0.425003 16.5983 1.175 13.5967C1.93 10.5717 3.07167 7.51 4.38334 5.165L4.68 4.65L5.005 4.11834L5.36 3.58334C6.40834 2.07167 7.82334 0.666672 9.66667 0.666672C10.5167 0.666672 11.3617 0.873338 12.1917 1.11667L13.18 1.42001C13.3433 1.47001 13.505 1.51834 13.6667 1.56334C15.1083 1.97667 16.5833 2.33334 18 2.33334C19.4167 2.33334 20.8917 1.97667 22.3333 1.56334L23.8083 1.11834C24.6383 0.873338 25.4833 0.666672 26.3333 0.666672ZM12.1667 7.33334C11.0616 7.33334 10.0018 7.77233 9.22039 8.55373C8.43899 9.33513 8 10.3949 8 11.5C8 12.6051 8.43899 13.6649 9.22039 14.4463C10.0018 15.2277 11.0616 15.6667 12.1667 15.6667C13.2717 15.6667 14.3315 15.2277 15.1129 14.4463C15.8944 13.6649 16.3333 12.6051 16.3333 11.5C16.3333 10.3949 15.8944 9.33513 15.1129 8.55373C14.3315 7.77233 13.2717 7.33334 12.1667 7.33334ZM23.8333 7.33334C23.3913 7.33334 22.9674 7.50893 22.6548 7.82149C22.3423 8.13405 22.1667 8.55798 22.1667 9V9.83334H21.3333C20.8913 9.83334 20.4674 10.0089 20.1548 10.3215C19.8423 10.6341 19.6667 11.058 19.6667 11.5C19.6667 11.942 19.8423 12.366 20.1548 12.6785C20.4674 12.9911 20.8913 13.1667 21.3333 13.1667H22.1667V14C22.1667 14.442 22.3423 14.866 22.6548 15.1785C22.9674 15.4911 23.3913 15.6667 23.8333 15.6667C24.2754 15.6667 24.6993 15.4911 25.0119 15.1785C25.3244 14.866 25.5 14.442 25.5 14V13.1667H26.3333C26.7754 13.1667 27.1993 12.9911 27.5119 12.6785C27.8244 12.366 28 11.942 28 11.5C28 11.058 27.8244 10.6341 27.5119 10.3215C27.1993 10.0089 26.7754 9.83334 26.3333 9.83334H25.5V9C25.5 8.55798 25.3244 8.13405 25.0119 7.82149C24.6993 7.50893 24.2754 7.33334 23.8333 7.33334ZM12.1667 10.6667C12.3877 10.6667 12.5996 10.7545 12.7559 10.9107C12.9122 11.067 13 11.279 13 11.5C13 11.721 12.9122 11.933 12.7559 12.0893C12.5996 12.2455 12.3877 12.3333 12.1667 12.3333C11.9457 12.3333 11.7337 12.2455 11.5774 12.0893C11.4211 11.933 11.3333 11.721 11.3333 11.5C11.3333 11.279 11.4211 11.067 11.5774 10.9107C11.7337 10.7545 11.9457 10.6667 12.1667 10.6667Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 2)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryAbbigliamento">
                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.145 2.67163C21.945 1.92153 16.25 -0.019354 16.25 0.000145863C16.25 1.03448 15.8549 2.02646 15.1516 2.75785C14.4484 3.48923 13.4946 3.90012 12.5 3.90012C11.5054 3.90012 10.5516 3.48923 9.84835 2.75785C9.14509 2.02646 8.75001 1.03448 8.75001 0.000145863C8.75001 -0.019354 3.05501 1.92153 0.853767 2.67163C0.604367 2.75665 0.387338 2.92177 0.233919 3.14324C0.0804993 3.3647 -0.00139702 3.63107 1.80335e-05 3.90402V8.7348C7.04836e-05 8.93226 0.0433766 9.12712 0.12665 9.30458C0.209923 9.48204 0.330974 9.63744 0.480616 9.75899C0.630258 9.88053 0.804558 9.96503 0.990285 10.0061C1.17601 10.0471 1.36829 10.0436 1.55252 9.99579L5.00001 9.10009V24.7C5.00001 25.0448 5.13171 25.3754 5.36613 25.6192C5.60055 25.863 5.91849 26 6.25001 26H18.75C19.0815 26 19.3995 25.863 19.6339 25.6192C19.8683 25.3754 20 25.0448 20 24.7V9.10009L23.4475 9.99579C23.6317 10.0436 23.824 10.0471 24.0097 10.0061C24.1954 9.96503 24.3697 9.88053 24.5194 9.75899C24.669 9.63744 24.7901 9.48204 24.8734 9.30458C24.9566 9.12712 24.9999 8.93226 25 8.7348V3.90402C25.0013 3.63091 24.9192 3.36442 24.7656 3.14293C24.6119 2.92145 24.3946 2.75642 24.145 2.67163Z"
                                fill="#ffffff" />
                        </svg>
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 3)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryCasa">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.7193 0.292786C10.5318 0.105315 10.2775 0 10.0123 0C9.74712 0 9.49282 0.105315 9.30529 0.292786L2.30529 7.29279L0.305288 9.29279C0.209778 9.38503 0.133596 9.49538 0.0811869 9.61738C0.0287779 9.73939 0.00119157 9.87061 3.77567e-05 10.0034C-0.00111606 10.1362 0.0241857 10.2678 0.0744666 10.3907C0.124747 10.5136 0.199001 10.6253 0.292893 10.7192C0.386786 10.8131 0.498438 10.8873 0.621334 10.9376C0.744231 10.9879 0.87591 11.0132 1.00869 11.012C1.14147 11.0109 1.27269 10.9833 1.39469 10.9309C1.5167 10.8785 1.62704 10.8023 1.71929 10.7068L2.01229 10.4138V16.9998C2.01229 17.7954 2.32836 18.5585 2.89097 19.1211C3.45358 19.6837 4.21664 19.9998 5.01229 19.9998H15.0123C15.8079 19.9998 16.571 19.6837 17.1336 19.1211C17.6962 18.5585 18.0123 17.7954 18.0123 16.9998V10.4138L18.3053 10.7068C18.4939 10.8889 18.7465 10.9897 19.0087 10.9875C19.2709 10.9852 19.5217 10.88 19.7071 10.6946C19.8925 10.5092 19.9977 10.2584 20 9.99619C20.0022 9.73399 19.9014 9.48139 19.7193 9.29279L10.7193 0.292786Z"
                                fill="#ffffff" />
                        </svg>

                    </div>
                </div>
            @elseif ($category_id == 4)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryAnimali">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.95799 25.2H18.2V23.1C18.2 22.1717 17.8312 21.2815 17.1749 20.6251C16.5185 19.9688 15.6283 19.6 14.7 19.6H13.3C13.1143 19.6 12.9363 19.5263 12.805 19.395C12.6737 19.2637 12.6 19.0857 12.6 18.9C12.6 18.7144 12.6737 18.5363 12.805 18.405C12.9363 18.2738 13.1143 18.2 13.3 18.2H14.7C15.9996 18.2 17.2459 18.7163 18.1648 19.6352C19.0837 20.5541 19.6 21.8004 19.6 23.1V25.2H19.95C20.6108 25.2 21.21 24.9326 21.644 24.5H21.7V24.4426C22.1191 23.9975 22.352 23.4089 22.351 22.7976V12.1436C24.605 12.054 25.9532 9.5536 24.7492 7.6104L24.0464 6.4764C23.7803 6.0467 23.409 5.69205 22.9675 5.44607C22.526 5.20009 22.029 5.07092 21.5236 5.0708H19.5146V4.1804C19.5146 3.99913 19.4789 3.81962 19.4095 3.65215C19.3401 3.48467 19.2385 3.33249 19.1103 3.20431C18.9821 3.07613 18.8299 2.97445 18.6625 2.90508C18.495 2.83571 18.3155 2.8 18.1342 2.8C17.6847 2.80019 17.2396 2.88891 16.8244 3.0611C16.4091 3.23329 16.0319 3.48558 15.7142 3.80357C15.3965 4.12155 15.1445 4.499 14.9726 4.91437C14.8008 5.32974 14.7124 5.77489 14.7126 6.2244V11.0628C12.9234 11.2392 11.5724 12.0848 10.5798 13.2776C9.9638 14.0168 9.48919 14.8848 9.1238 15.7948C8.80599 16.4388 8.58339 17.1374 8.47419 17.8738L8.45599 17.9564C8.06959 19.6112 7.93379 21.2576 7.89179 22.4812C7.87499 23.0048 7.87499 23.4556 7.88059 23.8H6.95799C6.42013 23.8 5.89397 23.6429 5.44423 23.3479C4.9945 23.0529 4.64078 22.6328 4.42659 22.1395C4.2124 21.6461 4.14708 21.1009 4.23864 20.5708C4.33021 20.0408 4.57468 19.5491 4.94199 19.1562L6.22999 17.7744C7.11769 16.8223 7.60122 15.5628 7.57877 14.2613C7.55631 12.9598 7.0296 11.7177 6.10959 10.7968L4.84539 9.5326C4.78082 9.46575 4.70358 9.41242 4.61818 9.37573C4.53277 9.33905 4.44092 9.31974 4.34798 9.31893C4.25503 9.31812 4.16285 9.33583 4.07683 9.37103C3.9908 9.40622 3.91264 9.4582 3.84692 9.52393C3.78119 9.58965 3.72922 9.66781 3.69402 9.75384C3.65882 9.83986 3.64111 9.93204 3.64192 10.025C3.64273 10.1179 3.66204 10.2098 3.69872 10.2952C3.73541 10.3806 3.78874 10.4578 3.85559 10.5224L5.11979 11.7866C5.78397 12.4506 6.16427 13.3466 6.18047 14.2856C6.19666 15.2246 5.84748 16.1331 5.20659 16.8196L3.91859 18.2014C3.3666 18.7942 2.99957 19.5352 2.86251 20.3335C2.72545 21.1319 2.82431 21.9528 3.14697 22.6958C3.46963 23.4388 4.00207 24.0714 4.67902 24.5163C5.35596 24.9611 6.14799 25.1987 6.95799 25.2Z"
                                fill="#ffffff" />
                        </svg>
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 5)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategorySport">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 2.83334C9.17576 2.83334 2.83334 9.17576 2.83334 17C2.83334 24.8243 9.17576 31.1667 17 31.1667C24.8243 31.1667 31.1667 24.8243 31.1667 17C31.1667 9.17576 24.8243 2.83334 17 2.83334ZM11.679 6.19509L15.9403 8.74509V11.8518L11.9864 14.7248L9.09076 13.7233L8.25918 8.71676C9.24116 7.68073 10.399 6.82696 11.679 6.19509ZM5.12976 19.0386L8.42634 15.742L11.3163 16.7408L12.8492 21.4625L11.475 23.6938L6.80993 23.4189C5.96637 22.084 5.39534 20.5953 5.12976 19.0386ZM14.9175 28.8618L13.2402 24.8823L14.6044 22.6624H19.3814L20.6734 24.9022L19.2001 28.8405C17.7851 29.1018 16.335 29.109 14.9175 28.8618ZM26.7637 24.0493L22.4797 23.7802L21.1508 21.4795L22.6908 16.7408L25.5425 15.7548L28.8178 19.3248C28.4837 21.0299 27.7828 22.642 26.7637 24.0493ZM25.7437 8.72101L24.9093 13.7261L22.0193 14.7248L18.0653 11.8518V8.74368L22.3182 6.19368C23.6006 6.82673 24.7604 7.68246 25.7437 8.72101Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 6)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryBeauty">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.6511 4.53151H18.9244C18.0703 4.53423 18.1023 5.80719 18.9244 5.79971H23.6511V6.45047H18.9244C18.0751 6.44299 18.1064 7.71527 18.9244 7.71867H23.6511V8.38371H18.9244C18.0751 8.38371 18.1064 9.65531 18.9244 9.65191H23.6511V10.2857H18.9244C18.0928 10.2918 18.1064 11.5648 18.9244 11.5688H23.6511V12.204H18.9244C18.0928 12.2012 18.0894 13.4722 18.9244 13.4722H23.6511V14.1059H18.9244C18.0928 14.1086 18.0894 15.3809 18.9244 15.3748H23.6511V16.0242H18.9244C18.0928 16.0167 18.0894 17.2876 18.9244 17.2924H23.6511V17.9248H18.9244C18.0928 17.9241 18.1064 19.1978 18.9244 19.1937H23.6511V31.5418C23.6538 33.4234 26.5118 33.3894 26.52 31.5418V2.64519C26.5118 1.78567 25.806 0.699033 24.6446 0.695633H18.9244C18.0703 0.696313 18.1023 1.96927 18.9244 1.96383L23.6511 1.97947V2.61187H18.9244C18.0717 2.60779 18.1036 3.88007 18.9244 3.88075H23.6511V4.53151ZM18.5994 26.4234C18.5966 24.227 16.32 21.8647 13.6 23.3947V14.994L11.8408 1.13899C11.8041 0.772473 11.4934 0.686113 11.2846 0.679993C11.069 0.686113 10.6372 0.772473 10.5903 1.13899L8.84 14.994V23.3947C6.12 21.8647 3.9168 24.242 3.91612 26.4064C3.9168 28.3322 5.3992 29.9139 7.4052 29.9091C9.42616 29.9139 10.88 28.1411 10.88 26.4064V17.68H11.56V26.4064C11.56 28.3485 13.0642 29.786 14.7356 29.8772C14.7077 30.942 15.0552 32.4612 15.7094 33.0636C16.4764 33.7708 17.3896 32.8664 17.015 32.13C16.6532 31.4446 16.2982 31.0386 16.5866 29.5419C17.7915 28.9843 18.5966 27.8106 18.5994 26.4234ZM7.48272 28.1513C7.02419 28.1513 6.58444 27.9692 6.26021 27.6449C5.93597 27.3207 5.75382 26.8809 5.75382 26.4224C5.75382 25.9639 5.93597 25.5241 6.26021 25.1999C6.58444 24.8757 7.02419 24.6935 7.48272 24.6935C8.4252 24.699 9.19292 25.4721 9.19972 26.4234C9.19778 26.8792 9.0166 27.3159 8.69533 27.6393C8.37406 27.9626 7.93849 28.1465 7.48272 28.1513ZM13.311 26.4234C13.3126 25.9672 13.4937 25.53 13.8151 25.2063C14.1366 24.8825 14.5725 24.6983 15.0287 24.6935C15.485 24.6976 15.9213 24.8816 16.2428 25.2055C16.5643 25.5294 16.745 25.9671 16.7457 26.4234C16.745 26.8796 16.5642 27.317 16.2427 27.6406C15.9211 27.9642 15.4848 28.1477 15.0287 28.1513C14.5726 28.1472 14.1366 27.9635 13.815 27.6401C13.4935 27.3166 13.3124 26.8795 13.311 26.4234Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 7)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryGioielli">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 2L2 8L12 22L22 8L18 2H6Z" fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 8)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryLibri">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.5 14.464C17.4999 14.512 17.4952 14.5599 17.486 14.607C17.5071 14.7156 17.5039 14.8274 17.4767 14.9346C17.4495 15.0418 17.3989 15.1417 17.3285 15.227C17.2582 15.3123 17.1698 15.3811 17.0698 15.4283C16.9698 15.4755 16.8606 15.5 16.75 15.5H2.75C2.58585 15.5 2.4233 15.5323 2.27165 15.5951C2.11999 15.658 1.98219 15.75 1.86612 15.8661C1.75004 15.9822 1.65797 16.12 1.59515 16.2716C1.53233 16.4233 1.5 16.5858 1.5 16.75C1.5 16.9142 1.53233 17.0767 1.59515 17.2284C1.65797 17.38 1.75004 17.5178 1.86612 17.6339C1.98219 17.75 2.11999 17.842 2.27165 17.9049C2.4233 17.9677 2.58585 18 2.75 18H16.75C16.9489 18 17.1397 18.079 17.2803 18.2197C17.421 18.3603 17.5 18.5511 17.5 18.75C17.5 18.9489 17.421 19.1397 17.2803 19.2803C17.1397 19.421 16.9489 19.5 16.75 19.5H2.75C2.02065 19.5 1.32118 19.2103 0.805456 18.6945C0.289731 18.1788 0 17.4793 0 16.75V2.75C0 2.02065 0.289731 1.32118 0.805456 0.805456C1.32118 0.289731 2.02065 0 2.75 0H16.15C16.896 0 17.5 0.604 17.5 1.35V14.464ZM5.75 4C5.55109 4 5.36032 4.07902 5.21967 4.21967C5.07902 4.36032 5 4.55109 5 4.75C5 4.94891 5.07902 5.13968 5.21967 5.28033C5.36032 5.42098 5.55109 5.5 5.75 5.5H11.75C11.9489 5.5 12.1397 5.42098 12.2803 5.28033C12.421 5.13968 12.5 4.94891 12.5 4.75C12.5 4.55109 12.421 4.36032 12.2803 4.21967C12.1397 4.07902 11.9489 4 11.75 4H5.75Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 9)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryFaiDaTe">
                        <svg width="31" height="28" viewBox="0 0 31 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.9591 13.8094L14.537 10.4685C14.4669 10.3998 14.3836 10.3453 14.2919 10.3081C14.2002 10.2709 14.1018 10.2518 14.0025 10.2518C13.9032 10.2518 13.8049 10.2709 13.7131 10.3081C13.6214 10.3453 13.5381 10.3998 13.468 10.4685L0.236949 22.6575C0.163577 22.7251 0.104815 22.8063 0.0641329 22.8964C0.0234512 22.9865 0.0016757 23.0836 9.29615e-05 23.1821C-0.00148978 23.2805 0.0171524 23.3783 0.0549179 23.4696C0.0926834 23.5609 0.148806 23.6439 0.21997 23.7136L4.37335 27.7834C4.44464 27.8532 4.52957 27.9084 4.6231 27.9456C4.71662 27.9828 4.81684 28.0013 4.91782 27.9999C5.0188 27.9986 5.11848 27.9775 5.21095 27.9379C5.30343 27.8983 5.38682 27.8409 5.45618 27.7693L17.9578 14.8526C18.0281 14.7843 18.084 14.703 18.1221 14.6136C18.1602 14.5241 18.1799 14.4282 18.1801 14.3313C18.1802 14.2344 18.1607 14.1384 18.1228 14.0489C18.0849 13.9593 18.0292 13.8779 17.9591 13.8094ZM30.8531 10.2745L28.0932 7.59856C27.9669 7.47571 27.817 7.37849 27.6521 7.31252C27.4872 7.24654 27.3105 7.21312 27.1323 7.21418C26.8436 7.21444 26.5622 7.30337 26.3281 7.46839C26.3281 7.44198 26.3318 7.41619 26.3337 7.39347C26.362 6.99436 26.406 6.39139 26.0067 5.8449C25.532 5.22007 25.0108 4.63024 24.4473 4.0802C24.4457 4.07841 24.4441 4.07677 24.4422 4.07529C23.6046 3.26969 21.7817 1.75243 18.9891 0.640433C17.9295 0.21626 16.7952 -0.00130574 15.65 5.89535e-06C13.6655 5.89535e-06 12.1563 0.874377 11.5784 1.39261C11.0093 1.89965 10.6361 2.58234 10.5213 3.32618L11.5275 3.92976C11.5275 3.92976 12.0343 3.80696 12.399 3.72161C12.78 3.64225 13.171 3.61846 13.5592 3.65099C14.3886 3.71792 15.3696 4.12011 15.8035 4.45475C16.5392 5.03255 16.8932 5.81113 16.9517 6.97778C16.9643 7.23751 16.353 8.28872 15.4325 9.42405C15.3559 9.51844 15.3175 9.63701 15.3246 9.75723C15.3316 9.87744 15.3837 9.99094 15.4708 10.0761L18.3238 12.862C18.4152 12.9504 18.5378 13.0013 18.6665 13.0042C18.7952 13.0071 18.9201 12.9617 19.0155 12.8773C19.7745 12.2019 20.9328 11.1581 21.1956 10.999C21.6792 10.7086 22.025 10.6527 22.12 10.6429C22.3664 10.6193 22.6142 10.6703 22.8299 10.789C22.831 10.7995 22.8298 10.8102 22.8265 10.8202C22.8231 10.8302 22.8176 10.8395 22.8104 10.8474L22.696 10.9536L22.6771 10.9708C22.5507 11.0938 22.4504 11.24 22.3821 11.4011C22.3137 11.5621 22.2787 11.7347 22.279 11.909C22.2793 12.0833 22.3149 12.2559 22.3838 12.4167C22.4526 12.5775 22.5534 12.7234 22.6803 12.846L25.4439 15.5281C25.5382 15.6196 25.6657 15.6709 25.7986 15.6709C25.9315 15.6709 26.059 15.6196 26.1533 15.5281L30.8493 10.972C30.8967 10.9266 30.9344 10.8724 30.9603 10.8127C30.9861 10.753 30.9996 10.6889 31 10.624C31.0003 10.5592 30.9875 10.4949 30.9623 10.4349C30.9371 10.3749 30.9 10.3204 30.8531 10.2745Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @elseif ($category_id == 10)
                <div class="cointainerCircleIconCategory">
                    <div class="circleIconCategoryFood">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.575 28.75H24.65C25.7 28.75 26.5625 27.9375 26.6875 26.9125L28.75 6.3125H22.5V1.25H20.0375V6.3125H13.825L14.2 9.2375C16.3375 9.825 18.3375 10.8875 19.5375 12.0625C21.3375 13.8375 22.575 15.675 22.575 18.675V28.75ZM1.25 27.5V26.25H20.0375V27.5C20.0375 28.175 19.475 28.75 18.75 28.75H2.5C1.8125 28.75 1.25 28.175 1.25 27.5ZM20.0375 18.75C20.0375 8.75 1.25 8.75 1.25 18.75H20.0375ZM1.25 21.25H20V23.75H1.25V21.25Z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                </div>
            @endif

        @endif
        {{-- @endif --}}
                
        <div
            style="width:100%; border-radius:50px; background-color:red; display:flex; align-items:center; justify-content:center; margin-bottom:15px;margin-top:10px;">

            <svg width="28" height="16" viewBox="0 0 36 28" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M26.3333 0.666672C28.1767 0.666672 29.5917 2.07167 30.64 3.58334L30.995 4.11834L31.32 4.65167C31.4233 4.825 31.5217 4.99834 31.6167 5.165C32.9283 7.51 34.07 10.5717 34.825 13.5967C35.575 16.5983 35.99 19.7333 35.725 22.1983C35.4583 24.6733 34.1833 27.3333 31.3333 27.3333C28.7767 27.3333 26.7617 25.9667 25.125 24.6317L23.275 23.08C21.7367 21.82 20.0533 20.6667 18 20.6667C15.9467 20.6667 14.2617 21.82 12.7267 23.08L10.8767 24.63C9.23667 25.9667 7.22167 27.3333 4.66667 27.3333C1.815 27.3333 0.540003 24.6733 0.275003 22.1983C0.0116697 19.7317 0.425003 16.5983 1.175 13.5967C1.93 10.5717 3.07167 7.51 4.38334 5.165L4.68 4.65L5.005 4.11834L5.36 3.58334C6.40834 2.07167 7.82334 0.666672 9.66667 0.666672C10.5167 0.666672 11.3617 0.873338 12.1917 1.11667L13.18 1.42001C13.3433 1.47001 13.505 1.51834 13.6667 1.56334C15.1083 1.97667 16.5833 2.33334 18 2.33334C19.4167 2.33334 20.8917 1.97667 22.3333 1.56334L23.8083 1.11834C24.6383 0.873338 25.4833 0.666672 26.3333 0.666672ZM12.1667 7.33334C11.0616 7.33334 10.0018 7.77233 9.22039 8.55373C8.43899 9.33513 8 10.3949 8 11.5C8 12.6051 8.43899 13.6649 9.22039 14.4463C10.0018 15.2277 11.0616 15.6667 12.1667 15.6667C13.2717 15.6667 14.3315 15.2277 15.1129 14.4463C15.8944 13.6649 16.3333 12.6051 16.3333 11.5C16.3333 10.3949 15.8944 9.33513 15.1129 8.55373C14.3315 7.77233 13.2717 7.33334 12.1667 7.33334ZM23.8333 7.33334C23.3913 7.33334 22.9674 7.50893 22.6548 7.82149C22.3423 8.13405 22.1667 8.55798 22.1667 9V9.83334H21.3333C20.8913 9.83334 20.4674 10.0089 20.1548 10.3215C19.8423 10.6341 19.6667 11.058 19.6667 11.5C19.6667 11.942 19.8423 12.366 20.1548 12.6785C20.4674 12.9911 20.8913 13.1667 21.3333 13.1667H22.1667V14C22.1667 14.442 22.3423 14.866 22.6548 15.1785C22.9674 15.4911 23.3913 15.6667 23.8333 15.6667C24.2754 15.6667 24.6993 15.4911 25.0119 15.1785C25.3244 14.866 25.5 14.442 25.5 14V13.1667H26.3333C26.7754 13.1667 27.1993 12.9911 27.5119 12.6785C27.8244 12.366 28 11.942 28 11.5C28 11.058 27.8244 10.6341 27.5119 10.3215C27.1993 10.0089 26.7754 9.83334 26.3333 9.83334H25.5V9C25.5 8.55798 25.3244 8.13405 25.0119 7.82149C24.6993 7.50893 24.2754 7.33334 23.8333 7.33334ZM12.1667 10.6667C12.3877 10.6667 12.5996 10.7545 12.7559 10.9107C12.9122 11.067 13 11.279 13 11.5C13 11.721 12.9122 11.933 12.7559 12.0893C12.5996 12.2455 12.3877 12.3333 12.1667 12.3333C11.9457 12.3333 11.7337 12.2455 11.5774 12.0893C11.4211 11.933 11.3333 11.721 11.3333 11.5C11.3333 11.279 11.4211 11.067 11.5774 10.9107C11.7337 10.7545 11.9457 10.6667 12.1667 10.6667Z"
                    fill="#ffffff" />
            </svg>
            <h5 class="main_card_category_image_h5">
                Elettronica</h5>
        </div>

        <div class="containerInfoProdotto">
            <h5 class="dataInfoProdotto">12.12.12</h5>
            <h2 class="titoloInfoProdotto">
                Iphone 12 pro max
            </h2>

            <p class="descrizioneInfoProdotto">Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam
                erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis
                nisl ut aliquip ex ea commodo consequat.
            </p>

            <h2 class="prezzoInfoProdotto">
                12,99€
            </h2>
            <div class="containerBtnInfoProdotto">
                <button class="BtnAccettaArticolo">
                    <div class="sign">
                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99998 16.42L0.789978 10.21L3.61998 7.38L6.99998 10.77L16.88 0.880005L19.71 3.71L6.99998 16.42Z" fill="white"/>
                            </svg>
                            
                    </div>
                    <div class="textBtnAccettaArticolo">Accetta</div>
                </button>

                <button class="BtnRifiutaArticolo">
                    <div class="sign">
                        <svg width="17" height="17" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8678 12.2513L11.6158 7.99957L15.8664 3.74833C15.9083 3.70646 15.9415 3.65675 15.9642 3.60204C15.9868 3.54733 15.9985 3.48869 15.9985 3.42947C15.9985 3.37025 15.9868 3.31161 15.9642 3.2569C15.9415 3.20218 15.9083 3.15247 15.8664 3.1106L12.8887 0.132106C12.8041 0.0475192 12.6894 0 12.5697 0C12.4501 0 12.3354 0.0475192 12.2508 0.132106L7.99946 4.38334L3.74883 0.132106C3.57971 -0.0372448 3.28024 -0.0372448 3.11089 0.132106L0.132501 3.11015C0.0480275 3.19481 0.000586546 3.30953 0.000586546 3.42913C0.000586546 3.54873 0.0480275 3.66344 0.132501 3.7481L4.38382 7.99957L0.131821 12.2515C0.0474027 12.3362 0 12.4509 0 12.5705C0 12.69 0.0474027 12.8047 0.131821 12.8894L3.10976 15.8677C3.15162 15.9096 3.20134 15.9429 3.25607 15.9656C3.3108 15.9883 3.36947 16 3.42873 16C3.48798 16 3.54665 15.9883 3.60138 15.9656C3.65612 15.9429 3.70583 15.9096 3.74769 15.8677L7.99946 11.6158L12.2515 15.8675C12.3396 15.9554 12.4546 15.9997 12.5704 15.9997C12.6863 15.9997 12.8014 15.9554 12.8896 15.8675L15.868 12.8892C15.9526 12.8046 16 12.6898 16 12.5702C16 12.4506 15.9524 12.3358 15.8678 12.2513Z" fill="white"/>
                            </svg>
                            
                            
                    </div>
                    <div class="textBtnRifiutaArticolo">Rifiuta</div>
                </button>




            </div>

        </div>
    </div>

</div>

</x-layout>