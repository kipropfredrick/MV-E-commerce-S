<style>
    .cd-dropdown {
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: translateY(-100%);
  transition: transform 0.5s;
}
.cd-dropdown.dropdown-is-active {
  transform: translateY(0);
}
.cd-dropdown-content.is-hidden, .cd-dropdown-content ul.is-hidden {
  /* push the secondary dropdown items to the right */
  transform: translateX(100%);
}

.cd-dropdown-content.move-out > li > a, .cd-dropdown-content ul.move-out > li > a {
  /* push the dropdown items to the left when secondary dropdown slides in */
  transform: translateX(-100%);
}
@media only screen and (min-width: 1024px) {
  .cd-dropdown {
    position: absolute;
    top: 100%;
    /* reset style*/
    height: auto;
    width: auto;
    opacity: 0;
    visibility: hidden;
    transform: translateY(30px);
    transition: opacity 0.3s 0s, visibility 0s 0.3s, transform 0.3s 0s;
  }
  .cd-dropdown.dropdown-is-active {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.3s 0s, visibility 0.3s 0s, transform 0.3s 0s;
  }

  .cd-dropdown-content {
    /* reset mobile style */
    position: static;
    height: auto;
    width: 280px;
  }
  .cd-dropdown-content .cd-secondary-dropdown, .cd-dropdown-content .cd-dropdown-gallery, .cd-dropdown-content .cd-dropdown-icons {
    transform: translateX(0);
    left: 100%;
    height: auto;
  }
  .cd-dropdown-content .cd-secondary-dropdown.is-hidden, .cd-dropdown-content .cd-dropdown-gallery.is-hidden, .cd-dropdown-content .cd-dropdown-icons.is-hidden {
    /* reset mobile style */
    transform: translateX(0);
  }
  .cd-dropdown-content > .has-children > ul {
    visibility: hidden;
  }
  .cd-dropdown-content > .has-children:hover > ul {
    /* when hover over .cd-dropdown-content items - show subnavigation */
    visibility: visible;
  }
  .cd-dropdown-content > .has-children:hover > .cd-secondary-dropdown > li > ul {
    /* if .cd-secondary-dropdown is visible - show also subnavigation */
    visibility: visible;
  }
}
</style>
<header>
    <div class="cd-dropdown-wrapper">
       <a class="cd-dropdown-trigger" href="#0">Dropdown</a>
       <nav class="cd-dropdown">
          <h2>Title</h2>
          <a href="#0" class="cd-close">Close</a>
          <ul class="cd-dropdown-content">
             <li>
                <form class="cd-search">
                   <input type="search" placeholder="Search...">
                </form>
             </li>

             <li class="has-children">
                <a href="#0">Clothing</a>
                <ul class="cd-secondary-dropdown is-hidden">
                   <li class="go-back"><a href="#0">Menu</a></li>
                   <li class="see-all"><a href="#0">All Clothing</a></li>
                   <li class="has-children">
                      <a href="#0">Accessories</a>

                      <ul class="is-hidden">
                         <li class="go-back"><a href="#0">Clothing</a></li>
                         <li class="see-all"><a href="#0">All Accessories</a></li>
                         <li class="has-children">
                            <a href="#0">Beanies</a>
                            <ul class="is-hidden">
                               <li class="go-back"><a href="#0">Accessories</a></li>
                               <li class="see-all"><a href="#0">All Benies</a></li>
                               <li><a href="#0">Caps &amp; Hats</a></li>
                               <!-- other list items here -->
                            </ul>
                         </li>
                         <li class="has-children">
                            <a href="#0">Caps &amp; Hats</a>
                            <ul class="is-hidden">
                               <li class="go-back"><a href="#0">Accessories</a></li>
                               <li class="see-all"><a href="#0">All Caps &amp; Hats</a></li>
                               <li><a href="#0">Beanies</a></li>
                               <!-- other list items here -->
                            </ul>
                         </li>
                         <li><a href="#0">Glasses</a></li>
                         <!-- other list items here -->
                      </ul>
                   </li>

                   <li class="has-children">
                      <!-- other list items here -->
                   </li>

                   <li class="has-children">
                      <!-- other list items here -->
                   </li>

                   <li class="has-children">
                      <!-- other list items here -->
                   </li>
                </ul> <!-- .cd-secondary-dropdown -->
             </li> <!-- .has-children -->

             <li class="has-children">
                <!-- other list items here -->
             </li> <!-- .has-children -->

             <li class="has-children">
                <!-- other list items here -->
             </li> <!-- .has-children -->

             <li class="cd-divider">Divider</li>

             <li><a href="#0">Page 1</a></li>
             <!-- other list items here -->

          </ul> <!-- .cd-dropdown-content -->
       </nav> <!-- .cd-dropdown -->
    </div> <!-- .cd-dropdown-wrapper -->
 </header>

 <main class="cd-main-content">
    <!-- your content here -->
 </main>
