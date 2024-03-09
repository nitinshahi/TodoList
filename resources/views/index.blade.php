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
      <h2 style="text-align: center; padding-top: 20px;">Hello {{$user->name}}, Good Morning</h2>
      <ul class="home-items">
        <?php 
          $count = 0;
          $sum = 0 ;
        ?>
        @foreach($todos as $todo)
              <?php 
                $count ++;
                $sum = $sum + $todo->price;
              ?>
        @endforeach
        <li>
          <p>Total Items</p>
          <p style="font-size: 32px; padding-top: 40px">{{$count}}</p>
        </li>
        <li>
          <p>Total Cost</p>
          <p style="font-size: 32px; padding-top: 40px">{{$sum}}</p>
        </li>
        <li>
          <p>This Month Total Items</p>
          <p style="font-size: 32px; padding-top: 40px">{{$count}}</p>
        </li>
        <li>
          <p>This Month Total Cost</p>
          <p style="font-size: 32px; padding-top: 40px">{{$sum}}</p>
        </li>
      </ul>
    </div>
  </body>
</html>
