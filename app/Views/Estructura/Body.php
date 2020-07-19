
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
.rigth_rectagle {
  transform: rotate(-57deg);
  position: absolute;
  top: -681px;
  left: 71%;
  width: 910px;
  height: 1364.79px;
  opacity: 1;
  margin: -1px;
  overflow: hidden;
  z-index: -1;
  border-radius: 50px;
  background: linear-gradient(271.51deg, #4ad7d1 13.64%, #fb4c4b 80.88%);
  box-shadow: 4px 8px 20px rgba(0, 0, 0, 0);
}

.left_rectagle {
  overflow: hidden;
  z-index: -1;
  border-radius: 150px;
  position: absolute;
  height: 979px;
  width: 1341px;
  left: -7.47%;
  right: 25.97%;
  top: -625.54px;
  background: rgba(158, 231, 229, 0.36);
  transform: rotate(-30deg);
}

@media (max-width: 1300px) {
  .left_rectagle {
    left: -17.47%;
  }
}

@media (max-width: 1000px) {
  .left_rectagle {
    left: -25.47%;
  }
}

@media (max-width: 770px) {
  /* Sticky footer styles
-------------------------------------------------- */

  .home_header .heading_1 {
    padding-right: 30px;
  }

  .left_rectagle {
    left: -25.47%;
  }
}

@media (max-width: 650px) {
  /* Sticky footer styles
-------------------------------------------------- */

  .rigth_rectagle {
    transform: rotate(-57deg);
    position: absolute;
    top: -465px;
    left: 65%;
    width: 765px;
    height: 899.79px;
    opacity: 1;
    margin: -1px;
    overflow: hidden;
    z-index: -1;
    border-radius: 50px;
    background: linear-gradient(271.51deg, #4ad7d1 13.64%, #fb4c4b 80.88%);
    box-shadow: 4px 8px 20px rgba(0, 0, 0, 0);
  }

  .left_rectagle {
    overflow: hidden;
    z-index: -1;
    border-radius: 104px;
    position: absolute;
    height: 804px;
    width: 1146px;
    left: -48.47%;
    right: 25.97%;
    top: -625.54px;
    background: rgba(158, 231, 229, 0.36);
    transform: rotate(-30deg);
  }
}

@media (max-width: 524px) {
  .middle_text {
    padding-right: 25px;
    padding-left: 25px;
  }

  .left_rectagle {
    overflow: hidden;
    z-index: -1;
    border-radius: 104px;
    position: absolute;
    height: 804px;
    width: 1146px;
    left: -76.47%;
    right: 25.97%;
    top: -668.54px;
    background: rgba(158, 231, 229, 0.36);
    transform: rotate(-30deg);
  }

  .rigth_rectagle {
    left: 72%;
  }
}
.left_rectagle {
  animation: left_rec_move 8s;
  animation-iteration-count: infinite;
}

.rigth_rectagle {
  animation: right_rec_move 7s;
  animation-iteration-count: infinite;
  animation-direction: reverse;
}

@keyframes left_rec_move {
  0% {
    transform: rotate(-30deg);
  }
  50% {
    transform: rotate(-35deg);
  }
  100% {
    transform: rotate(-30deg);
  }
}

@keyframes right_rec_move {
  0% {
    transform: rotate(-57deg);
  }

  50% {
    transform: rotate(-60deg);
  }

  100% {
    transform: rotate(-57deg);
  }
}

   </style>
<div class="left_rectagle"></div>
<div class="rigth_rectagle"></div>


</body>
</html>


<script>
  async function Click() {
    const response = await fetch('http://localhost:82/cn/index.php/posts/index')
    const data = await response.json();
     console.log(data);
    //tabla(data)    

  }

  Click();

</script>