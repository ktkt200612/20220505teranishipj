<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css" />
</head>
<style>
  body{
    background:rgb(46, 13, 123);
    width:1300px;
    margin: 0 auto;
  }
  .todo{
    background:white;
    width:53%;
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 200px;
    padding-top: 20px;
    padding-bottom: 60px;
    padding-left: 30px;

  }
  .ttl{
    font-size: 25px;
    font-weight: bolder;

  }
  .text1{
    width: 76%;
    padding: 7px;
    margin-bottom: 20px;
    margin-top: 7px;
  }
  .text1-1{
    padding: 5px 10px;
    margin-left: 50px;
    color: #fff;
    background-color: #ee668d;
  }

  th{padding-bottom: 20px;}
  .a{padding-left: 80px;}
  .b{padding-left: 100px;}
  .c{padding-left: 100px;}
  .d{padding-left: 50px;}

  .a1{padding-left: 20px;}
  .b1{margin-left: 50px;
      width:95%;}

  .c1{
      margin-left: 100px;
      color: #fff;
      background-color: #df7d13;
      }

  .d1{
      margin-left: 50px;
      color: #fff;
      background-color: #53e62e;
      }



</style>
<body>
  <div class="todo">
    <div class="ttl">Todo List</div>
    <form action="/todo/create" method="POST">
    @csrf
      <input type="text" name="content" class="text1">
      <input type="submit" value="追加" class="text1-1">
    </form>
    <table>
      <tr class="koumoku">
        <th class=a>作成日</th>
        <th class=b>タスク名</th>
        <th class=c>更新</th>
        <th class=d>削除</th>
      </tr>
        @foreach ($items as $txt)
      <tr>
        <td class="a1">{{ $txt->created_at }}</td>
        <form action="/todo/update" method="POST">
          @csrf
          <td><input type="text" name="content" value="{{ $txt->content }}" class="b1"></td>
          <td>
            <button name="id" value="{{$txt->id}}" class="c1">更新</button>{{-- //ボタンはボタンでしかない --}}
          </td>
        </form>
        <td>
          <form action="/todo/delete" method="POST">
            @csrf
            <button type="submit" name="id" value="{{$txt->id}}" class="d1">削除</button>
          </form>
        </td>
        @endforeach
      </tr>
    </table>
  </div>
</body>
</html>
