using Microsoft.AspNetCore.Mvc;
using Prueba3.Models;
using System.Diagnostics;

namespace Prueba3.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            return View();
        }

        public IActionResult Privacy()
        
        {
            int x = 0;


            


            while (true)
            {

            }

            do
            {

            }
            while (true);

            return View();


            for (int i = 1;  i <= 10; i++)
            {

            }
        }



        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }

        public class Persona
        {
            public string Nombre { get; set; }
            public string Apellido { get; set; }

            public void GetNombreApellido()
            {

            }
        }

        public class Cliente : Persona
        {
            public void GetApellido()
            {

            }
        }

        public class Empleado : Persona
        {
            public void GetNombre()
            {

            }
        }

    }
}
