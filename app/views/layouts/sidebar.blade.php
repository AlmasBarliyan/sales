<div class="menu_section">
  <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu" style="display: none">
              <li><a href="{{ URL::to('/beranda') }}">Dashboard</a>
              </li>
          </ul>
      </li>
      <li><a><i class="fa fa-file-code-o"></i> Code <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu" style="display: none">
              <li><a href="{{ URL::to('/common-code') }}">Common Code</a>
              </li>
              <li><a href="{{ URL::to('/products') }}">Material Code</a>
              </li>
              <li><a href="{{ URL::to('/customers') }}">Customers Code</a>
              </li>
              <li><a href="{{ URL::to('/users') }}">Users Code</a>
              </li>
          </ul>
      </li>
      <li><a><i class="fa fa-user"></i> Transaction <span class="fa fa-chevron-down"></span> </a>
          <ul class="nav child_menu" style="display: none">
              <li><a href="{{ URL::to('/inbound') }}"> Inbound</a>
              </li>
              <li><a href="{{ URL::to('/return') }}"> Return</a>
              </li>
              <li><a href="{{ URL::to('/purchase-order') }}"> Purchase Order </a>
              </li>
              <li><a href="{{ URL::to('/delivery-order') }}"> DO </a>
              </li>
          </ul>
      </li>
    </ul>
</div>