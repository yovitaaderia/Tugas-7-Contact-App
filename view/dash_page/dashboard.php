<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="lni lni-menu"></i>
          </button>
          <div class="sidebar-logo">
            <a href="#">ContactApp</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-users"></i>
              <span>Account</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-grid-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-footer">
            <a href="<?php echo urlpath('login'); ?>"class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Log Out</span>
            </a>
      </aside>
        <div class="table">
            <div class="table_header">
                <p>Dashboard</p>
                <div>
                    <input placeholder="Cari...">
                    <button class="add_new">+ Add New</button>
                </div>
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>No.ID</th>
                            <th>No.HP</th>
                            <th>Owner</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0859106974463</td>
                            <td>Yovita Aderia</td>
                            <td>
                                <button><i class="lni lni-pencil"></i></button>
                                <button><i class="lni lni-eraser"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>0864832949785</td>
                            <td>Jesica Olivia</td>
                            <td>
                                <button><i class="lni lni-pencil"></i></button>
                                <button><i class="lni lni-eraser"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>0877865289665</td>
                            <td>Ahmad Pratama</td>
                            <td>
                                <button><i class="lni lni-pencil"></i></button>
                                <button><i class="lni lni-eraser"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>0872437407663</td>
                            <td>Budi Setiawan</td>
                            <td>
                                <button><i class="lni lni-pencil"></i></button>
                                <button><i class="lni lni-eraser"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>0865327384492</td>
                            <td>Prilly Latuconsina</td>
                            <td>
                                <button><i class="lni lni-pencil"></i></button>
                                <button><i class="lni lni-eraser"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </tbody>
              </table>
        </div>
      </div>
    </div>

    
  </body>
</html>
