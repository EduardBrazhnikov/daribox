<style>
.carousel {
  padding: 1.3em .3em 0;
  background: rgb(240,240,240);
  text-align: center;
}
.carousel div {
  position: relative;
  margin-bottom: .3em;
}
.carousel iframe {

}
.carousel span {
  display: inline-block;
  word-spacing: 1em;  /* расстояние между картинками */

/* прокрутка миниатюр при необходимости */
  overflow: auto;
  white-space: nowrap;
  word-wrap: normal;

}
.carousel a {
  position: relative;
  display: inline-block;
  max-width: 120px;  /* максимальная ширина миниатюр */
  width: 25%;  /* ширина миниатюр */
  border: 1px solid blue;  /* рамка вокруг миниатюр */
  opacity: .7;  
  text-decoration: none;
}
.carousel a:visited,
.carousel a:nth-of-type(1) {
  border-color: #555;  /* рамка вокруг миниатюр просмотренных видео */
}
.carousel a:hover { 
  opacity: 1;
}
.carousel a:not(:active):focus {
  pointer-events: none;
}
.carousel a::before {
  content: "";
  position: absolute;
  top: 0em;
  right: 0em;
  bottom: 0em;
  left: 0em;
  background: rgba(0,0,1,.1);
  transition: background 0s 9999999s;
}
.carousel a:nth-of-type(1)::before {
  background: rgba(255,255,254,.7);
}
.carousel span:active a::before {
  background: rgba(0,0,0,0);
  transition: background 0s;
}
.carousel span:active a:active::before {
  background: rgba(255,255,255,.7);
  transition: background 0s;
}
.carousel img {
  max-width: 100%;
  vertical-align: middle;  /* убрать нижний отступ до рамки под картинкой */
}
</style>
<div class="carousel">
  <div><iframe width="640" height="360" src="https://www.youtube.com/embed/r4XXF4ZpMgE?rel=0" allowfullscreen frameborder="0" name="slider1"></iframe></div>
  <span>
      <a href="//www.youtube.com/embed/jFaygsPYkgs?rel=0&autoplay=1" target="slider1"><img src="//img.youtube.com/vi/r4XXF4ZpMgE/default.jpg"></a>
        <a href="//www.youtube.com/embed/jFaygsPYkgs?rel=0&autoplay=1" target="slider1"><img src="//img.youtube.com/vi/lu9axRYbaeE/default.jpg"></a>
    <a href="//www.youtube.com/embed/jFaygsPYkgs?rel=0&autoplay=1" target="slider1"><img src="//img.youtube.com/vi/-TrXMChvAUY/default.jpg"></a>
  </span>
</div>