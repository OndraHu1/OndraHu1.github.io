using Microsoft.AspNetCore.Mvc;
using novypokusicek.Models;
using System.Diagnostics;

namespace novypokusicek.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        // Index view
        public IActionResult Index()
        {
            return View();
        }

        // Privacy view
        public IActionResult Privacy()
        {
            return View();
        }

        // Login action
        public IActionResult Login()
        {
            // Placeholder for login logic
            return View(); // Create a corresponding Login view (login.cshtml)
        }

        // Logout action
        public IActionResult Logout()
        {
            // Placeholder for logout logic
            return RedirectToAction("Index"); // Redirect to home page after logout
        }

        // Register action
        public IActionResult Register()
        {
            // Placeholder for register logic
            return View(); // Create a corresponding Register view (register.cshtml)
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
