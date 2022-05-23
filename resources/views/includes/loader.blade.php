<style>
.loader {
    width: 100%;
    margin: 0;
    background-color: #fff;
    height: 100%;
    z-index: 99999;
    position: fixed;
    top: 0px;
    display: none;
}
.loader-text {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.loader-text span {
  font-size: 80px;
  letter-spacing: 5px;
  text-transform: uppercase;
  color: #262626;
  line-height: 1;
  mix-blend-mode: difference;
}
@keyframes move {
  0%,
  100% {
    left: 0;
  }
  50% {
    left: calc(100% - 100px);
  }
}
</style>
<div class="loader">
    <div class="loader-text">
      <span>Loading...</span>
    </div>
</div>