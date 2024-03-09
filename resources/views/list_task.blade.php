<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskWise Dashboard</title>
    <link rel="stylesheet" href="assets/style.css" />
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
      <div class="container">
        <div class="table">
          <table>
            <tr>
              <th>Task Id</th>
              <th>Task Name</th>
              <th>Created At</th>
              <th>Projected Date</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <?php 
              $count = 1;
            ?>
            @foreach($todos as $todo)
              <tr>
                <td>{{$count}}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>{{ $todo->target_date }}</td>
                <td>{{ $todo->price }}</td>
                <td>{{ $todo->status? "Completed":"Incomplete" }}</td>
                <td class="action">
                  <a href="{{ route('edit-task', ['todo' => $todo]) }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path opacity="0.15" d="M8 16H12L18 10L14 6L8 12V16Z" fill="#000000"></path>
                        <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                    <p>Edit</p>
                  </a>
                  <form action="{{ route('delete',['todo' => $todo]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              <?php 
                $count ++;
              ?>
              @endforeach
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
