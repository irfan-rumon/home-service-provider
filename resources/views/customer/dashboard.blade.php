<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            float:right; font-size: 25px;
            margin-right: 40px; background-color:hotpink; padding:8px;
            border-radius:8px;
        }
    </style>
</head>
<body>
    
    <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </button>
    </form>

      <h1>Welcome to Customer Dashboard</h1>
      <h3>What do you need, Sir?</h3>
</body>
</html>



