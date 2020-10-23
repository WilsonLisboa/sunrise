<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SunriseSOFT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="configuracion" class="d-block">Wilson Lisboa</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!--Modulo de Admninistracion-->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active menu-color">
              <ion-icon name="server"></ion-icon>
              <p>
                Registros Iniciales
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
              <li class="nav-item">
                <a href="proveedores" class="nav-link">
                  <ion-icon name="attach"></ion-icon>
                  <p>Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="clientes" class="nav-link">
                <ion-icon name="wallet"></ion-icon>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bancos" class="nav-link">
                <ion-icon name="cash-outline"></ion-icon>
                  <p>Bancos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cheques" class="nav-link">
                <ion-icon name="cash-outline"></ion-icon>
                  <p>Cheques</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cuentasBancarias" class="nav-link">
                <ion-icon name="cash-outline"></ion-icon>
                  <p>Cuentas Bancarias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="monedas" class="nav-link">
                <ion-icon name="cash-outline"></ion-icon>
                  <p>Monedas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="articulos" class="nav-link">
                  <ion-icon name="clipboard"></ion-icon>
                  <p>Articulos</p>
                </a>
              </li>              
            </ul>

            <!--Modulo de inventario-->
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <ion-icon name="layers"></ion-icon>
              <p>
                Inventario
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
              <li class="nav-item">
                <a href="registroInventario" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Registro Inventario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="almacen" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Almacen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="informeInventario" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Informes Inventario</p>
                </a>
              </li>
          </li></ul>
          
        <!-- Modulo de Compras -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <ion-icon name="cart"></ion-icon>
              <p>
                Compras
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
            <li class="nav-item">
                <a href="solicitarCompra" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Solicitar Compra</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="ordenCompra" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Orden de Compra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="registrarCompra" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Registrar Compra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="informeCompras" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Informes de Compras</p>
                </a>
              </li>
          </li></ul>

          <!--Modulo de Facturacion-->

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <ion-icon name="analytics"></ion-icon>
              <p>
                Ventas
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
              <li class="nav-item">
                <a href="registrarPedido" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Registrar Pedido</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="facturacion" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Facturaracion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="informeVentas" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Informes de Ventas</p>
                </a>
              </li>
          </li></ul>

          <!-- Modulo de cuentas a cobrar -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <ion-icon name="analytics"></ion-icon>
              <p>
                Cuentas a Cobrar
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
              <li class="nav-item">
                <a href="cuentasCobrar" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Cuentas a cobrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cobranzas" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Cobranzas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="informeCobranzas" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Informes de Cobranzas</p>
                </a>
              </li>
          </li></ul>

          <!-- Modulo de cuentas a pagar -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <ion-icon name="analytics"></ion-icon>
              <p>
                Cuentas a Pagar
                <ion-icon name="list" class="icon-right"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview sangria">
              <li class="nav-item">
                <a href="cuentasPagar" class="nav-link">
                <ion-icon name="book"></ion-icon>
                  <p>Cuentas a Pagar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ordenPago" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Orden de pago</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="informePago" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                  <p>Informes de Pagos</p>
                </a>
              </li>
          </li></ul>


          <!--Control de usuarios-->
          <li class="nav-item">
            <a href="controlUsuario" class="nav-link">
              <ion-icon name="person-add"></ion-icon>
              <p>Control de Usuarios</p>
            </a>
          </li>

          <!--Modulo de onfiguracion-->
          <li class="nav-item">
            <a href="configuracion" class="nav-link">
              <ion-icon name="build"></ion-icon>
              <p>Configuracion</p>
            </a>
          </li>

          <!--Cerrar Sesion-->
          <li class="nav-item">
            <a href="cerrarSesion" class="nav-link">
              <ion-icon name="power"></ion-icon>
              <p>Cerrar Sesion</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>