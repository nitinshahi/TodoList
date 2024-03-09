<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskWise Dashboard</title>
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <div class="navbar">
      <h1>Welcome to TaskWise</h1>
      <div class="main-header">
        <div class="items">
          <a href="{{ route('todo') }}">Home</a> 
          <a href="{{route('list-task')}}">Task</a>
          <a href="{{route('add-task')}}">Add</a>
        </div>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          @method('post')
          <button type="submit"
            >Logout
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
                <path
                  d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5"
                  stroke="#000000"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
            </svg>
          
        </form>
      </div>
    </div>
    <div class="main-container">

      @if($errors->any())
        <div class="">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

    <div class="add-item">
      <form action="{{ route('update-task',['todo' => $todo]) }}" class="form" method="POST">
          @csrf
          @method('post')

        <div class="name">
          <input
            type="text"
            class="itemname"
            class="itemname"
            id="itemname"
            name="title"
            value="{{ $todo->title }}"
            required
          />
          <svg
            xmlns:dc="http://purl.org/dc/elements/1.1/"
            xmlns:cc="http://creativecommons.org/ns#"
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
            xmlns:svg="http://www.w3.org/2000/svg"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            viewBox="0 0 448 448"
            id="svg2"
            version="1.1"
            inkscape:version="0.91 r13725"
            sodipodi:docname="work-item-2.svg"
            fill="#000000"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <title id="title3350">work-item</title>
              <defs id="defs4">
                <pattern
                  y="0"
                  x="0"
                  height="6"
                  width="6"
                  patternUnits="userSpaceOnUse"
                  id="EMFhbasepattern"
                ></pattern>
              </defs>
              <sodipodi:namedview
                id="base"
                pagecolor="#ffffff"
                bordercolor="#666666"
                borderopacity="1.0"
                inkscape:pageopacity="0.0"
                inkscape:pageshadow="2"
                inkscape:zoom="1.979899"
                inkscape:cx="100.38339"
                inkscape:cy="187.19657"
                inkscape:document-units="px"
                inkscape:current-layer="layer1"
                showgrid="true"
                units="px"
                inkscape:snap-bbox="true"
                inkscape:bbox-nodes="true"
                inkscape:window-width="3840"
                inkscape:window-height="2097"
                inkscape:window-x="-8"
                inkscape:window-y="-8"
                inkscape:window-maximized="1"
                inkscape:object-nodes="true"
                inkscape:snap-grids="true"
                inkscape:snap-to-guides="false"
                inkscape:snap-nodes="true"
              >
                <inkscape:grid
                  type="xygrid"
                  id="grid3336"
                  spacingx="16"
                  spacingy="16"
                  empspacing="2"
                ></inkscape:grid>
              </sodipodi:namedview>
              <metadata id="metadata7">
                <rdf:rdf>
                  <cc:work rdf:about="">
                    <dc:format>image/svg+xml</dc:format>
                    <dc:type
                      rdf:resource="http://purl.org/dc/dcmitype/StillImage"
                    ></dc:type>
                    <dc:title>work-item</dc:title>
                  </cc:work>
                </rdf:rdf>
              </metadata>
              <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer"
                id="layer1"
                transform="translate(0,-604.36209)"
              >
                <path
                  style="
                    fill-opacity: 1;
                    stroke: none;
                    stroke-width: 64;
                    stroke-miterlimit: 4;
                    stroke-dasharray: none;
                    stroke-opacity: 1;
                  "
                  d="M 112 0 L 90.666016 32 L 32 32 C 14.271983 32 0 46.271983 0 64 L 0 416 C 0 433.72802 14.271983 448 32 448 L 320 448 C 337.72802 448 352 433.72802 352 416 L 352 272 L 320 304 L 320 416 L 32 416 L 32 64 L 69.333984 64 L 48 96 L 304 96 L 282.66602 64 L 320 64 L 320 80 L 349.17773 50.822266 C 344.17232 39.706653 333.0229 32 320 32 L 261.33398 32 L 240 0 L 112 0 z M 128 32 L 224 32 L 240 64 L 112 64 L 128 32 z "
                  transform="translate(0,604.36209)"
                  id="rect3337"
                ></path>
                <path
                  style="
                    fill-rule: evenodd;
                    stroke: none;
                    stroke-width: 1px;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-opacity: 1;
                  "
                  d="m 48,844.36209 128,128 272,-272 -32,-48 -240,240 -80,-80 z"
                  id="path4147"
                  inkscape:connector-curvature="0"
                  sodipodi:nodetypes="ccccccc"
                ></path>
              </g>
            </g>
          </svg>
        </div>
        <div class="price-date">
          <div class="price">
            <input
              type="number"
              class="price"
              class="price"
              id="price"
              name="price"
              value="{{ $todo->price }}"
              required
            />
            <svg
              viewBox="0 0 64 64"
              xmlns="http://www.w3.org/2000/svg"
              stroke-width="3"
              stroke="#000000"
              fill="none"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M43.18,58.17H20.82a2.34,2.34,0,0,1-2.34-2.34V28.88a1.19,1.19,0,0,1,.37-.86L30.72,16.88a1.18,1.18,0,0,1,1.57,0L45.12,28a1.18,1.18,0,0,1,.4.88V55.83A2.34,2.34,0,0,1,43.18,58.17Z"
                  stroke-linecap="round"
                ></path>
                <path
                  d="M32,25.17c-4.42,0-8-4.33-8-9.67s3.57-9.67,8-9.67,8,4.33,8,9.67"
                  stroke-linecap="round"
                ></path>
                <path
                  d="M38.48,50.08H27.28a.08.08,0,0,1-.06-.14c.76-.82,4.42-5,3-8.79-1.56-4.21-.55-10.89,7-7.78"
                  stroke-linecap="round"
                ></path>
                <line
                  x1="25.52"
                  y1="41.26"
                  x2="35.97"
                  y2="41.26"
                  stroke-linecap="round"
                ></line>
              </g>
            </svg>
          </div>

          <div class="date">
            <input
              type="date"
              class="date"
              class="date"
              id="date"
              name="target_date"
              value="{{ $todo->target_date }}"
              required
            />
          </div>
        </div>
        <div class="check-box">
          <label class="switch">
            <input type="hidden" name="status" value=0>
              <input type="checkbox" name="status" id="checkbox" class="checkbox" value=1>
              />
            <span class="slider round"></span>
          </label>
          <p>Completed?</p>
        </div>
        <div class="button">
          <button class="button-section">edit Item</button>
        </div>
      </form>
    </div>
  </div>

  </body>
</html>
