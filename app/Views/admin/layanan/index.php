<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kategori Layanan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="<?= base_url(); ?>/layanan/create" class="btn btn-primary"><i class="fa fa-plus"></i> Add Layanan</a>
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Layanan</th>
                    <th>Tenaga Ahli</th>
                    <th>Detail Layanan</th>
                    <th>Gambar</th>
                    <th>Url</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>100</td>
                    <td>Tenaga Ahli</td>
                    <td>
                      Engineering, Production, Project, Programmer
                    </td>
                    <td>
                      <img class="img_table" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgVFRUYGRgaHBoaHBoYGBgYGBgYGhkZGhkZGBgcIS4lHB4rIRoZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISGjEhISM0NDQ0NDQ0MTQ0NDExMTE0NDE0NDQ0NDE0NDE0NDQ0NDQxNDE0NDQ0PzE0NDQ0PzQ0P//AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAAIDBAUBBwj/xABEEAACAQICBQkEBwcEAgMBAAABAgADEQQhBRIxQVEGImFxgZGhscETMlJyBxQkQmLR8CMzNIKSsuEVosLxQ+Jjw9IW/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDAAQF/8QAJBEAAwEAAgIDAAIDAQAAAAAAAAECESExAxIyQVEEYRMigXH/2gAMAwEAAhEDEQA/AH4SofaICCDrrthfyv8A4Y/MvrAzCVD7ZBc21kh5pvBNWolFte4OeQyvOFdl6Z5i5jLwhr8l8SuxAflIMzq2iqye9TcfymY2mfedBkr0iNoI68owpMFC1o2dZZww4Aa0MtFfuk+WBphnor9yvVHXQlG5VP7Sl8qzN5cj3Oo+k0qv7yj8qyhy1cjUtvBv4RWFdnn2nFPsz8gPjMfReCeu6pTW7HPgAN5Y7haEulapak6sAeYQMtmUl+jBFLPrA2NhrWy1Bclb9JsOowN5LwZrWek6KwwRFytzVAGzVVQLD1PXK6J7WozD3RzQegbT1k5dkWNxpIIXZsHWcvOTUCEpC363ReEsR0TFSt/So+RlXFHZ2267ao/ulmlziQN179glaueeo6v7gfSLh0f0TItgBwyjpwRTBFeImcnNbO3QD5/l4zBHXnIopjDaiXBHGcpNcA/q+zzkgUm5A2bZDT2sOm/fnCYtUaDMCRulHH4kU0d22IpY9gOXp2zZ0Wcm6/SC3L86uHqgbyo7CRCpXBL3etfhR5Mco8ZUDt7MGmCTcLkp2lbXudt7jjCDC8pg4vqK44owPnA5qTJoZXRmUl9dtU21g1TUsewr3QHoYp0N0Yqeg2lPG/bf6ZwV+/p7idJ4Z8nQj5l9RIqmisFV91lB6CB4GeW4PlLVGTP3i47ZrUtPE+8inqylP8YqpIL63ItD7lQ9tjB7T3JypSRWLAi9rzUwVR2AKF1JF/ey2X2GW+UhdsChJJbWFz3xHOMdU2effVm4jvij+zzihwcJKNAe0Qh1bnJkNvDZPQsRikpqHc2GQvYnb1TzPAi1ZPmXzh1ymrlKGstr6y7e2TXyEovU9L0G2VE7TbzltKyHYwPUQZ5mdLn7yIeyOTSdPfTKn8J/zHN6npL0EbaqnrAlKtoLDttpr2C0EKOl1Hu1ai9ZJHjeaOH0vUJASsGPBlHpNwDGX6/JLDts1l6j+YmfW5Ej7lQ9ov5S8umKy5MqHqJUydNPH71Nv5SDCgcg1W5F1h7rK3baa+E0bUSmqsuYFss5qrp6lvDDrU+ks09J0W2OvfbzhAUqoIq0hb7omfy1W5TMDI7Zv1VRiHBBIItYwb5c7afb6RWGewUr0TYg2Itum5ySwRp0UBFjqgnrOY8M/wCaZlChruibja/V97whXQ2E8SfDIeAEnX4dnhn7HObso62PZl6yS8iX3z0ADxN/SRY/EFEJAu2xRsuxGV+jI3PCLh0P9LGFchfmB/3G8zvas1YHLUGS8SRcsx6NwH4emWVcikvxFVGXxEAXlvF4IU6KNbMOmt0BzqgdmXfGSJVSlr+xsV4o2o1heDCw6Umrn6wqfdKHP8WsMu4Ey6Zn1zZ9Y/dK91ud4GZIWniNCIzkjDc4joU+JB8hNgxpaOz1geEzDk9uK/2n/wBpYpVCpuJXq+8p6/EQ/Qky1TZo6MazFePmIPfSKl8O/RqHuYTVRyDcTL5VXqUKo3+zdv6NUiFPoW4eul+A1j1qPoilqAFFN3+IKrsAR0XzPVAOek8na6nRVUMckFVTfg3OH9wnmb1AIfA3yn9M4K+h8tYDEEtqbcrzLeqTNTQ9Gw1zvyHVOncFzT1XQiWRPkP9pknKCoVwKEH7w9ZzQvuJ8h/tMXKJgMChYXGsMu+QrljT2BP1luPgIpz6zT+Bv6pyOMbiKgrJqqQboduWZzyhdys/hv5l9YGKpFele+epDLlafs38y+sklyCjz12jVaNqGcUw4HS1TMJOS6jXBsPeHrBZGhVyVPOHzL5GYDI9PKPrD9foJQFQjYxHbLvKN7Yh+v0EydccZmwLS0uPqD71+sTUw+uyhrKbzBLAwl0cf2a9UyZmWaOE1K9PP3gDYbIuWTgal1DbfSWcR++pdQlTlkpOpbpy47IWaeWUNChSS4W2RUdlix8VE1qA5o6RfvlTDUdRCu9Uz+bNmPf5CXUGQHCTfJ6MLJwip1AXcXzAW/Re5HhJcNowV3LOWCJzRqkrrHfmM9th2SngsOUL1T/5GLD5UOoPC3fCjD6tNQtiWAuQtjmcySSQB2wqeSPl8nHH2YVPALVZKTAlVJLZkHmZe8M73Im3W0eppPSBYhgbazFiDtFixvkQJUw1XVrudU6hUnWFmCkstwSpNswTNcGMkQuvZ6DfXt39Y2xlUc09R8poaTw2q2sBzW223Nx7fOUWF4rWHbFKp0iw1XWRW4jPrGRHeDOVldldUou5FmupQWuCCtmIJ93dHnDGmquLlHAzH3DbO/RNHRTWcj4l8VJt5mZLknd7Or6MjAV9dMwykEqQ41WuMhcdVo9vfU8QfDVP5zV0pgrE1F/mHEbmHVv64P6XdkVHUX1HBYcUIIe3HK5t0TNcj+O1U6XAed1jynKu1fm9DOMc0I337tW//ETlZ7FR0g+IH/KAqTSDEU9Y6p3o6n+YqPSWJEPfPQF82P5TGw8w0KxYV8I5OrrXKg2zU6t/AQax+FNOoyHOxyPEbjCrlKv1fHiqBZHz8Srjw1pR09oio7+0Qa+uVUKt9bZllvG0ysvH/wCnmXONr8MDDUS7Abt/VN+mtrAbJYoaEqUlsyNffkZz2JBzHnHZNHoOhDzE+Q/2mScoaWtgUBNucPWR6EFkX5D/AGmTaf8A4JPmHrJsZdgJ/p5+Ne+KT+zijlML+HxTF0W9xrL5wx5Xfwx+ZfWBOCRva07jLWXMG42w25Xfwx+ZfWJPyJ0edVJy8VSROcxK+uipk6tCrkl7/wDMvkYJIYV8kTz/AOZfIxanAsr8qD9pfr9BMcmanKioPrL9Y8hMjWEXEzJseGhZow/s16oIBoWaLP7NeqH1M6NfEfvqXUsWnKOvWpX2KGY+AXxIPZFX/fUupY7EPrOzbvdHyr+Zue2LXCLeCfat/Cqwyfu/2/5kzmwJ/V5A7c1+i/8AbLBF8uJA8ZNHfTxNk+mdWjh0YmwpgaxIvZQBrm2/MD9GZOF5OV8ePaYx6lKiTdMMjarMu56zfEdtvLZNHFIMTjkoHOnQUVXG5mv+zU9Gtzrf/GOFoWCXmTy6pvgDMT9H2HRdfBs+HrLmrq7EEj7rq17qd8u8lNLtWVlddSrTY06tO2SVBndfwsM/LfCaCT0/Y6VBAsuKoEm2+pRYZ9qsO4wueBUwldQQQQCDtEwsXg2TPavxb16G/P8A7m9FJtaWm3L4M/RDgoV+En+ls/UiYemtKYfCsrtV1AblUC67vuPs03Lna5y4TX0xiaWFoVcQygALmBlrHYqjgSSB2zI5JcmTf67jFD4mpZgGF1oJbmoinIG363xpnRavl59mX/8A3hHOOGxYp73emhW3EqADa3TL2GxdGtqMjBkdkCspyBLgFM81YX2HP1OCMrbuEBtP6KXA1RjaChaLMBiaa+6LkaldF2AqSLjK4vGqFgJtz/0s1cM1JlRs1vdTxGq1x1jytIXzbqKDtuX/APzNbSldXSm3SWvwsjKbf1CY9I3CNaxZiSOBsRY9WzskKWM7/FXtPJakVPax6bdwElkCtZC28hm7WuR5gQFmYnKbQf1nDgLb2ikul999qk8D6TP5CYSvQJqYkFUQ6iKcyL3u2V8tgHXDFFsAOGUq1hdGH4x5qT5mMq4wh5PFNf7fZtrpOg3317Z18Nhn2qjd08/09jnp13RLaoOQI6JRp6fbeg7DaWU6ed0eof6agHMAGRAtB7lQGTCIAcw4HnMMac1Vu1QpcXHOv4RmlOVuHfDpTJZnBuSVy374HLQU+TH+stxilf8A1Cif+zFNjKajT0f+8p/MnpDflf8Awx+ZfWB2GRA9Mqx99ciIY8r/AOGPzL6xJ+QtHnTmV3cXGcp4xiGIvIA0sIaquOMLORrc/wDmXyMAQemGvIE88/MvrM+gaQcrG+0v1jyEww00eWTH61U6x5CYqueMVLgJrKNkKtGj9msBExbQ70Q+tSQ9E3QGjR0k5D09XbqgDrO/s29kmUWFhuyjcSl6iH4UHe2zwBjryNPk9D+NOTv6QMt9ccR5raWcMblOlk/uBkB9/rX+0/5kmBNinQyjuaBFr+LL3JoK1fGVBrZ1EQawIOqlNWtZgCBrO/fCKYfJwNr4rWtf2+dr2/d0+M3J0ro8p9mN9Tr/AF72usPYey1bXz19YmwHVY36JT5RZYvR7Db7SqvYcPUJ8QD2QlmDptNbFYQfAa1TsCez/wDsEz6BK5Na8V4zXi15EtgP8oKYr4nC4Y+6GbEuOKUrBA3RruvcJu6X0mmHT2j3trKgAtcs7BQM8ht8JnaNpa2OxFQ/cpUqa9GsXqP38zumppLR1OumpVTWXWVrXIzU3ByP6vKz0SfZbBuLytpHCLVpPSYXV0ZGHQykessxRjAVyOotUo09dr+y1qbLb3qlNzTLE8D7NW6zJsXT1azKNgLOOpgPzPdJOSwYVMUoChFxNQA3OtdtRiLWsBe+e2S6SANZiBnqqvdc/wDLwkKOn+O37YUq55pHHLvyjav3V4nwGf5d8TG7gfCLnrOQ8LxJmxPDmjzb0HZJneTSjTOt7ZfxW70EvTOwTftqy9KH/aIQMFOU73xDnjY94EG8XibZDb5Tc06f2rdg7soLVFZnIAJN51Lo8il/syJnJzJnDLI0dV+DxjXwNUfc7s5tRiGKNsfhPdFNwDkPMLbXTZ7484acrv4Y/MvrA/CsC6c0C5U7M7wx5X/wx+ZfWRn5D2eTaS97slQGWtJ+/wBkqToJDyYbfR+eefmWBtKncQ25BJZyPxL5RKaGRl8s3+1VOseQg9rwj5ZUr4qoekf2iDxomLocErz0PQZ/YJ1TzhRYz0XQbAUEJ4QMxspU1mc8CF/pUX8SZJKGh2vT1jtZmY9ZJJ85fka7PWhZCRFV3HgfA5GOwhtUA/EGHVqk+amddbgg7xaR0CddDvBZW6wjEH9cZka/izd0Hhwj1gF1VZ1cdJ1ArH/bNiYuHxJU33cOM0Ex6EbbdBBl5pYebctMtCYuLzrl9yJqL8zHWfyQdkvVcetjq3J6pRZCc+Pmbm8F1xiD4551j0qnskiv3ypQRl1rkm7MR0LfmjsFpKsmVwsaNQB6jfFqHrsCvpNGZuEez24i3dmPWaUrL4OeljFFFM7TuLNOg5TOow1KY41H5q9gJBPQDHFMfkoysK9VXv7TEVmKaykLq1CgNrXBIQHtEhqVblnOwktf8O4/0gGW6VMUcMlMABgipkb3NrX1tp3m8zauZCDZkW6ty9p8AeM56end/HjOTitZS33mN7dJyUd1u6SolgB+r77xi85tbcMh0nYW9O+TRTqFMXBVftNQcbjuCzagrgq32ktuLsOwkzL7MzF0/TK1nvvJI6iT6gyjg0Acm20Qk5V4fmo/4nU/1Fh698FXq6hB4kidEvZPL80+ttGnFaR4Z7qDHVagUXMQQ5qrwilL2pO+0U2B4CqnQIqU+bldM4T8smthifxL6wVwp/aIPxrvhPy5NsMfnT1gn5Gs8p0gwLZcJU1Y+p704TnOghpNRe0NORVWxJAJOsuQ2k7gIDoYZ8hCLtfPnL+Qt3xKX2PL+g+w2jKaNUr1VXWa2bgHUFs1A2bT1nuECeWeh0TVxNFSKbmxW1tR8924ED9XhFprk/Xcip9ZPNYOtJy3s7qQdXWvfO220IcVgkr0DTcWV0tYfduMrdWUkVR4NUHOh3o9rYYH8BgZpTAvQqvSf3kYjoI3MOgjOF2DY/VB8vrKNCz8jY0Gf2Q6zNGY/J57oRwPmP8AE1xOd9nrLo7IwvPRhs1gD23UHxkkawymM1qNPVjwu79f9xYV9dQe8cDvEsqkKOOmQLTkoSShY8JCK2QasaZYKyNlmMqKy3BuNstppD4lPWPyMgZf10cO2RMP1uvu7BCnhnM12Xv9SXZZu7IdsoY0pUdWYXC+6DsB+L5su6ct+v13yNzYEnYMz+unZM6bRp8cplPSdfnAbbZAcXYfleU9X7gOZzc9e4dJ3dE4SxN8tc5neEBz/XHqk9JAosOsneSdpJ4xDticQ5VsMo6KKAYZUawJ4AnuECKT56w26xPbcww0k+rTc9Fu/L1gWjWW/WfMx5QGzb07d8KrDiH7LMT4QFx4y7YeaLOvSFI7gw7Cth4mefY7E7VtaxIPWDYynjfDRxfyZ2lQsFjCmRzEZi8WznolLX6Y4NHw5sZp0q1OwvtimbrTs2GxnoeDpWqJzgecOuEfL02wpP409YLYDOsnzL5Qp5fj7IfnX1k18jWeRVdsYTHVdsZLkCRRPTPo50SvsjXfe4CDhqEXbpzynm2HQswUC5JAA4k5AT3LQOi/YYcUNa5Q3J3azWqHsu1uwSdspCJNOrrIiC2sWyvwAN9nQfKTYHCtqKHYsbe7sUdBH3suMg0q4ZGYFldBrgjahF8ieBsRvBlDCpiDUTWZ7jO75DVyvzVAHRs2yT4LZwYX0kaGGouIW/Msp380nIE77HZ1kcJn4QfZR8k9KxuESqj03F0dSpHQfUcYA08KUpNTOZXXW/GxYekpL1CdUmQcna/PZfiHiD+UIxAjB1tRww3Wb0P66Ya03DAEbDmJGuz1peofOTsUA4qeM9ldzcr94DMgfEBxHjCCjUV1DKQykXBGYI6CIOVEDAqdhBB6jkYNaI01Vw7ADNTfWQ7L7DY/dN7wo5fN4vtHpoE6wyymdovTNKuOY1m3o2TDjlvHVNKMcj1dguVKuXOstQ7Sbi/4bHIr0TdwtbXQNaxzB6xLRF9ucQXhNgXWldljCn685ZZYwpAFUVigmbpVjzUU2ubseCj1v5TYZP1umE9TXZmGwnL5Rs/PtgZbxf7MjRABYf5PWeMdFOxTrQoopyYxkcoq1kC8TfuF/wAoMMMgOrw2+U1eUVfWcj4RbtO2ZV8ydyjx2/lHnoSuzT0FWtWtuI1e33h5eMDeUFAJiaq2++x7G5w8DCTCPqlW4HW/XZMzlrTtiSR95EPbbV9I89kvNOyDtowpwj4jKnJg20U7FMbD0TAVENSnqoQdZc732Qm5fj7KfnWCeAZRUpgfGPOFv0gr9kPzL6yS+ROzx2sYxZJXa8iWXJFnC1ijq42qwb+kg+k9jxGlXapTZCAzqusoOut3sUJ7yOM8aVocchULEgbdZbdYBI8YlIeHh6NRwR1ldypIBB1QQHuQQXF87WPHbLFHMs3TqjqXb/u1u6dw9YOoYdRG8EZEHqMWHGR+Z/7iZIoSQKYgu5/G/wDc0NSYCYV9YFuLOe9zGkWugd0hh9R2HwnL5TmPC3dNzQGLuuoTmM16RwjOVlK1RG3Mi36x/jymJhnZCrX3m3ZbI9hHfBS09DxWnKYbzsrYHFLUQMNu8cDvlmSLnDAnGraq46X87w2MC9I/vm+Zh+u6GQURF7ZgkWzuMiO0TbwHKvEUwoYioPx3DWtnzx2Zm8wXOwcfIRUwWbIX3KB5xyNzL7CvDfSZhr6tenVotvuuuOwrtHTaadHl3o9tmIA60e/lMWhRUousoPNG0A7o9KCDYijqAHlNqOX0/sIV5UYZvcZ3+Wm9v6mAAkWI5RfBSbrYqPAXmQBGutwRxBgGUfpTbTdfEuqZKrbtuWd+AGQ8ZvATC5N4WwZyM/cHZ73jab0WmdcQkhRRRRSiQpFiKgRSx2AEyWYXKDFbKY629B5xkjGBi6tzrHaWv6yEbh05niTu9Yqmb2G0C99wvv68o5hbVA4+m2OTfLJJT5ZZ+wfjTt2giXJT5Vj9lhz0VB2XWFdg8nwYMTk7OSpw6cvFOWnZgno+Hrk1aYPxLw23EJvpE/hD8y+sGMLhyKqHXQguhsDmNmyFf0ij7J/OvrJz8iVnitUxBo+vIgJYkSiHv0d+8fmHkYBoIe/R0vOPzDyMWugz2WcdylfC46qubIzAkcDYZgfrZD7R2KFRA4Frn9ETyPlsv2yp1jyE9Q5L1NbC0m4rfxMk/otPRqVkupHEEd4gDoqlqU1Q7Vup6wSJ6BBDEUtSo68HbubnDwaaRaOaewhqMiD3ig1fm3flAmuLEA3GfUQwvunotcft6XyrBzl1glR1dRb2gueGuu/thKeK+PVmRo7HNTa/ePiXj1wuoVldQym4P6zgJiEYBGAOzIgTS0HpEo1jkD7w4E7GEWpOzw+XeH2FpnmelNLXqOFXY7Zk8GIytPQ8fiQlN3+FWPhl6TyG+ee3f1zeOd5E/kW5xI9H5F6AGJovXrE866IBzQAuRbLbnl2S8MCKV0CBSNth432mEXJOjqYLDgD/AMasetxrnxaWcbQRxz1ZD8VtnaCRbrmfZzzb+wVRbADhO2mrV0K+1CrDdnb9d8iGiK3w262H5wFPZGfH06LNfVBO89A6TumzhtA73bsX85ex1JUosqqACNXL8RC7d+2YHstxA/hk1UA7T1k3PiTJ4pyTO5cI7FFK2MxaoLtt3DefymCcx+LFNNY7dgHEwRrVCxLMczmTJsZimdtZuwbgOEpuNY23Db09EdLBWztPjxz/ACjQbsejLtOZ9J2q+qLn9cJBgVaxJ2k3jC7zhZkenMLrpRW9tVCf6z/6iSWkGKqOzkrbVyC3+FRYfn2xKbXRqzMZknQ/4vCNbRB+Id01AH6Iud0Qe9fpH/HP4ZH+kt8QnZqc7gIo3u/0P+OS/ooH29M/jXzh39Iw+x/zp6wG0VSArJzyeeuVrQ7+kZrYM/OnrKz8jho8YxIFxYyECSV/SRgypImpmH30d5k/MPIzz5RD/wCjn3m+ZfIxK6Glmby0YfW6g6R5T0PkO98FS6Aw7mM825cH7bV6x5T0H6O3vgk6Gcf7olLhFJYTzA03StU1viUd65HwI7pvzO01Sumt8Bv/ACnJu69+yBGZRrj9tS+VZj8v3I9mBvDX6RlNuuP21L5FmLy+XOlcge9t7IfsWewGfFsi+8dUZjt3CYw0myv7RjcnI9K8P108ZPpmpZtQMCBmbdOyYrnnAR0uB3bT1Bvp7TIbCpTU3ZzY/Iuw9uXcYIgzmsT2ZDoE7aZTiN5LdvWexcjeVOHehSos606iIqarkKG1FCgoxyOwZbYXgz5wRb7M+r/E08BpPFU7LSqVV4BSxHYuz/qK4FVHvaoBcgWvt3eE46E7GI6rZ9tp4xR5cY9Mvb63zIh/43llfpFxo2mkeun+TQerD7I9bOGXeWPW7eV7SjpVAqC2V2XeeBO+eWV/pAxzbKiJ8iJ/yvGaD05XrYqkKtZ3BLZMebfUa3NGUDl4PDXuj0KR1KqqLsQBxMoaQ0sqZLm3gOs7+qCuP0uCbu9zw226hJzLZ6TpT2EOL02Mwg/mPoJiVcSSSzG54mYdbTI+4va35CZuIxjv7xy4bB3Sig57/kSuuQoNTW2ZDj37JFUxKJtNhbK/jbjtlPRGK1l1Sc18t0WmKOulxtXPs3zMdV7T7IWKra2ofunYPInpl/DtYA9vZe8ydYMtO5tln1CaIYnYLDjv7BE3ECX9sfUckgDdt/KKcVbbIrybejdnIjEZyAGHIorxTBLeih9oT508offSIoODN/jT1iinUvkebR4rihnlskYE7FKkkPAh/wDRwM2+ZfIxRRK6GRjcuB9sq9Y8od/RqfsduDv6H1iii10h5C2cqUwwIOwgg9RyiiiLsYB9GaWqNjTh6oXWpEqrLsdVORI3HMGZ30o6RAenTHvqpY7bAHZnviijT2KeauSSScyZWp5vfr/KKKUFYS8kNDricSlGoSFIYki1+aL2nrWB5I4enbVp0+s0wzf1OzeUUUzCjWGjads11uvZ3Cw8IjhEV0sirYseaqjPVtuHAmKKAJQ0zoChibq6KDkS6qoe5OXPte2RvAXTX0dsudFwSdiv97qfd1EdsUUKAAmKwjo5RxZgbWuDn1jKcweIam6uu1Tf09Yooxlw+CXF4+o5JLEdAPnxmfVcgXiiglI1XTfLHLci8daKKEw+jXZDrLlu6xLL6TqEWyHUPzMUUmykXSTxljCG6IeDTXEUU577OqOjsaYoohVHI0xRTGFaKKKYx//Z" alt="">
                    </td>
                    <td>coba.com</td>
                    <td>
                      <a href="<?= base_url(''); ?>/layanan/update">
                        <span class="right badge badge-primary"><i class="fa fa-edit"></i> Update</span>
                      </a>
                      <a href="">
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i> Delete</span>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>