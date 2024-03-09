<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskWise</title>
    <link rel="stylesheet" href="assets/login.css" />
  </head>
  <body>
    <div class="main">
        @if($errors->any())
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <div class="container">
        <img class="logo" src="assets/uploads/logo.jpg" alt="" />
        <h1>TaskWise</h1>
        <form class="form" type="submit" action="{{ route('signup') }}" method="POST">
            @csrf
            @method('post')

          <div class="name">
            <input
              type="text"
              id="name"
              class="name"
              name="name"
              placeholder="Name"
              required
            />
            <svg
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <g id="User / User_Card_ID">
                  <path
                    id="Vector"
                    d="M6 18C6.06366 18 6.12926 18 6.19691 18H12M6 18C5.01173 17.9992 4.49334 17.9868 4.0918 17.7822C3.71547 17.5905 3.40973 17.2837 3.21799 16.9074C3 16.4796 3 15.9203 3 14.8002V9.2002C3 8.08009 3 7.51962 3.21799 7.0918C3.40973 6.71547 3.71547 6.40973 4.0918 6.21799C4.51962 6 5.08009 6 6.2002 6H17.8002C18.9203 6 19.4796 6 19.9074 6.21799C20.2837 6.40973 20.5905 6.71547 20.7822 7.0918C21 7.5192 21 8.07899 21 9.19691V14.8031C21 15.921 21 16.48 20.7822 16.9074C20.5905 17.2837 20.2837 17.5905 19.9074 17.7822C19.48 18 18.921 18 17.8031 18H12M6 18C6.00004 16.8954 7.34317 16 9 16C10.6569 16 12 16.8954 12 18M6 18C6 18 6 17.9999 6 18ZM18 14H14M18 11H15M9 13C7.89543 13 7 12.1046 7 11C7 9.89543 7.89543 9 9 9C10.1046 9 11 9.89543 11 11C11 12.1046 10.1046 13 9 13Z"
                    stroke="#000000"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div class="phone">
            <input
              type="number"
              id="phone"
              class="phone"
              name="number"
              placeholder="Phone Number"
              required
            />
            <svg
              viewBox="-4 0 20 20"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              fill="#000000"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <title>phone [#000000]</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g
                  id="Page-1"
                  stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd"
                >
                  <g
                    id="Dribbble-Light-Preview"
                    transform="translate(-384.000000, -7159.000000)"
                    fill="#000000"
                  >
                    <g id="icons" transform="translate(56.000000, 160.000000)">
                      <path
                        d="M338,7002 C338,7001.448 337.552,7001 337,7001 L331,7001 C330.448,7001 330,7001.448 330,7002 L330,7016 C330,7016.552 330.448,7017 331,7017 L337,7017 C337.552,7017 338,7016.552 338,7016 L338,7002 Z M340,7001 L340,7017 C340,7018.105 339.105,7019 338,7019 L330,7019 C328.895,7019 328,7018.105 328,7017 L328,7001 C328,6999.895 328.895,6999 330,6999 L338,6999 C339.105,6999 340,6999.895 340,7001 L340,7001 Z M335.021,7014 C335.021,7014.552 334.573,7015 334.021,7015 C333.469,7015 333.021,7014.552 333.021,7014 C333.021,7013.448 333.469,7013 334.021,7013 C334.573,7013 335.021,7013.448 335.021,7014 L335.021,7014 Z"
                        id="phone-[#000000]"
                      ></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
           <div class="email">
            <input
              type="email"
              id="email"
              class="email"
              name="email"
              placeholder="Email"
              required
            />
           <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <rect x="3" y="5" width="18" height="14" rx="2" stroke="#000000" stroke-width="2" stroke-linecap="round"></rect> </g></svg>
          </div>

          <div class="password">
            <input
              type="password"
              id="password"
              class="password"
              name="password"
              placeholder="Password"
              required
            />
            <svg
              fill="#000000"
              viewBox="0 0 512 512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <g id="Password">
                  <path
                    d="M391,233.9478H121a45.1323,45.1323,0,0,0-45,45v162a45.1323,45.1323,0,0,0,45,45H391a45.1323,45.1323,0,0,0,45-45v-162A45.1323,45.1323,0,0,0,391,233.9478ZM184.123,369.3794a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Z"
                  ></path>
                  <path
                    d="M157.8965,143.9487a98.1035,98.1035,0,1,1,196.207,0V214.147h19.793V143.9487a117.8965,117.8965,0,0,0-235.793,0V214.147h19.793Z"
                  ></path>
                <
                /g>
              </g>
            </svg>
          </div>
          <div class="password">
            <input
              type="password"
              id="passwordagain "
              class="password"
              name="password_confirmation"
              placeholder="Password again"
              required
            />
            <svg
              fill="#000000"
              viewBox="0 0 512 512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <g id="Password">
                  <path
                    d="M391,233.9478H121a45.1323,45.1323,0,0,0-45,45v162a45.1323,45.1323,0,0,0,45,45H391a45.1323,45.1323,0,0,0,45-45v-162A45.1323,45.1323,0,0,0,391,233.9478ZM184.123,369.3794a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Z"
                  ></path>
                  <path
                    d="M157.8965,143.9487a98.1035,98.1035,0,1,1,196.207,0V214.147h19.793V143.9487a117.8965,117.8965,0,0,0-235.793,0V214.147h19.793Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>

          <button type="submit" class="button-section">Sign Up</button>
        </form>
        <p class="noacc">
          Already have an Account? <a href="{{ route('login') }}">Login</a>
        </p>
      </div>
      <img class="banner-img" src="assets/uploads/lllll2.jpg" alt="" />
    </div>
  </body>
</html>
