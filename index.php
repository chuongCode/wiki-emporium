<?php include('inc/html-top.php'); ?>

  <?php include('inc/nav.php'); ?>

      <div class="container">

      <section class="lead full-width-2">
        <h2 class="center">A little preview of what's to come...</h2>
        <div class="slider">
          <img src="images/tankman.jpg" alt="One man against an army">
          <img src="images/image0.png" alt="Ready to slay">
          <img src="images/drivers.jpg" alt="Vroom Vroom, here's a couple of drivers!">
          <img src="images/touchscreen.jpg" alt="We've come a long way in phone technology">
        </div>
      </section>

      <main>
        <!-- Main article content here -->

        <section class="left">
          <h2>Mercedes Formula 1</h2>

          <p>Mercedes’ modern F1 revival started with the creation of a works squad for 2010 - the platform for a meteoric rise up the Grand Prix order. The team generated huge excitement from the off with the sensational return of Michael Schumacher, but headlines soon followed on track: three podiums in their debut season, all via Nico Rosberg - who then claimed a breakthrough pole/victory double at China in 2012.</p>

          <p>The following season he was paired with Lewis Hamilton, the duo going on to stage some epic title battles as the Silver Arrows swept all before them to become one of the most dominant forces of the modern F1 era. And with Hamilton now partnered by the up-and-coming George Russell, Mercedes remain very much the team that everyone wants to beat...</p>

          <figure>
            <img src="images/totowolff.jpg" alt="Toto Wolff, a guy who's important to Mercedes">
          </figure>

          <a href="formula1.php">Read more about the fast lane of Mercedes F1 right here</a>
          
        </section>

        <section class="right">
          <h2>Smartphones</h2>

          <p>The invention of the smartphone was a technological revolution that changed the way we interact with the world. It transformed a simple communication device into a pocket-sized computer that allows us to access the internet, stay connected with loved ones, and manage our daily lives with ease. With the integration of cutting-edge technology like touchscreens, voice recognition, and powerful processors, the smartphone has become an essential part of modern life, enabling us to do things we never thought possible. From its humble beginnings to its current ubiquitous status, the smartphone has undoubtedly revolutionized the way we live, work, and play.</p>

          <figure>
            <img src="images/dailyuse.jpg" alt="Guy using his smartphone">
          </figure>

          <a href="smartphones.php">Read more about how smartphones revolutionized our lives right here</a>
          
        </section>

        <section class="left">
          <h2>Rupaul's Drag Race</h2>

          <p>RuPaul's Drag Race is an American reality competition television series, the first in the Drag Race franchise, produced by World of Wonder for Logo TV (season 1–8), WOW Presents Plus, VH1 (season 9–14) and, beginning with the fifteenth season, MTV. The show documents RuPaul in the search for "America's next drag superstar" RuPaul plays the role of host, mentor, and head judge for this series, as contestants are given different challenges each week. Contestants are judged by a panel that includes RuPaul, Michelle Visage, an alternating third main judge of either Carson Kressley, Ross Mathews, or Ts Madison, and one or more guest judges, who critique their progress throughout the competition. The title of the show is a play on drag queen and drag racing, and the title sequence and song "Drag Race" both have a drag-racing theme.</p>

          <figure>
            <img src="images/image0.png" alt="TV Show of RuPaul's Drag Race">
          </figure>

          <a href="dragqueen.php">Read more about the fabolous world of Drag Racing right here</a>
          
        </section>

        <section class="right">
          <h2>Liu Xiaobo</h2>
          
          <p>Liu Xiaobo (Chinese: 刘晓波; pinyin: Liú Xiǎobō; 28 December 1955 – 13 July 2017) was a Chinese writer, literary critic, human rights activist, philosopher and Nobel Peace Prize laureate who called for political reforms and was involved in campaigns to end communist one-party rule in China. He was arrested numerous times, and was described as China's most prominent dissident and the country's most famous political prisoner. On 26 June 2017, he was granted medical parole after being diagnosed with liver cancer; he died a few weeks later on 13 July 2017.</p>

          <figure>
            <img src="images/liuxiaobo.jpg" alt="Literary critic and peacemaker, Liu Xiaobo">
          </figure>

          <a href="dragqueen.php">Read more about the freedom initiatives of Liu Xiaobo right here</a>

        </section>

      </main>

      <footer>
        <!-- Footer content here -->
        <h2 class="center">Citations</h2>

        <ul class="citations">
            <li>Richard Chuong's Web Dev Emporium</li>
        </ul>

      </footer>

    </div>

    <?php include('inc/scripts.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="sss/sss.js"></script>
    <script>
       $('.slider').sss();
    </script>

    <script>
    $( "#accordion" ).accordion({});
    </script>

  </body>

</html>