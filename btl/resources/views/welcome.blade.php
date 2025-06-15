<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trang Quản Lý</title>
    <style>
      @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
      * {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
      }
      html, body {
        margin: 0;
        height: 100%;
      }
      a {
        text-decoration: none;
      }
      .bo-co-tn-kho {
        position: relative;
        width: 1690px;
        height: 1006px;
        background-color: #a8d5ba;
        overflow: hidden;
        font-family: 'Be Vietnam Pro', sans-serif;
      }
      .bo-co-tn-kho .frame {
        position: absolute;
        width: 1421px;
        height: 834px;
        top: 180px;
        left: 274px;
        background-color: #faf3dd;
      }
      .frame .frame-5,
      .frame .div,
      .frame .frame-2,
      .frame .frame-3,
      .frame .frame-4 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 309px;
        height: 194px;
        gap: 20px;
        position: absolute;
        background-color: #a8d5ba;
        border-radius: 30px;
        overflow: hidden;
      }
      .frame .div       { top: 176px; left: 496px; }
      .frame .frame-2   { top: 176px; left: 919px; }
      .frame .frame-3   { top: 476px; left: 73px;  }
      .frame .frame-4   { top: 484px; left: 496px; }
      .frame .frame-5   { top: 176px; left: 73px;  }
      .img {
        width: 92px;
        height: 81px;
        object-fit: contain;
      }
      .text-wrapper {
        font-size: 25px;
        color: #000000;
      }
      .text-wrapper-2 {
        font-size: 25px;
        color: #ffffff;
      }
      .wearly-logo {
        position: absolute;
        width: 109px;
        height: 110px;
        top: 20px;
        left: 42px;
        object-fit: cover;
      }
      .text-wrapper-3 {
        position: absolute;
        width: 444px;
        top: 31px;
        left: 691px;
        font-weight: 700;
        color: #000000;
        font-size: 64px;
        white-space: nowrap;
      }
      .image {
        position: absolute;
        width: 104px;
        height: 107px;
        top: 29px;
        left: 1525px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <div class="bo-co-tn-kho">
      <div class="frame">
        <div class="div">
          <img class="img" src="img/producer.png" />
          <p class="text-wrapper">Quản lý nhà cung cấp</p>
        </div>
        <div class="frame-2">
          <div class="img">
            <img class="img" src="./img/stock_in.png" />
          </div>
          <p class="text-wrapper">Quản lý nhập kho</p>
        </div>
        <div class="frame-3">
          <div class="img">
            <img class="img" src="./img/stock.png" />
          </div>
          <p class="text-wrapper">Quản lý xuất kho</p>
        </div>
     <div class="frame-4">
          <img class="img" src="./img/inventory_report.png" />
          <p class="text-wrapper-2">Báo cáo thống kê</p>
        </div>
        <div class="frame-5">
          <img class="img" src="img/product-white.png" />
          <p class="text-wrapper-2">Quản lý sản phẩm</p>
        </div>
      </div>
      <img class="wearly-logo" src="img/wearly-logo.png" />
      <div class="text-wrapper-3">WEARLY</div>
      <img class="image" src="./img/user_avt.png" />
    </div>
  </body>
</html>
