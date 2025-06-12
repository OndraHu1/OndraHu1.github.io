using System.ComponentModel.DataAnnotations;
namespace novypokusicek.Models
{
    public class Denik
    {
        public int Id {  get; set; }
        [Required(ErrorMessage = "Vyplňte jméno")]
        public string Jmeno { get; set; } = "";
        [Required(ErrorMessage = "Vyplňte příjmení")]
        public string Prijmeni { get; set; } = "";
        [Required(ErrorMessage = "Vyplňte Název")]
        [StringLength(100, ErrorMessage = "Název je příliš dlouhý")]
        public string Nazev { get; set; } = "";
        public string Popis { get; set; } = "";
        [Required]
        [RegularExpression(/*@"^(19|20)\d{2}$"*/
            /*@"^\d{4}$"*/
            @"(144[7-9]|14[5-9]\d|1[5-9]\d{2}|200\d|201\d|202[0-5])$", ErrorMessage = "takový rok není možné zadat")]
        public int RokVydani { get; set;}
        [Required(ErrorMessage = "Vyplňte nakladatelství")]
        public string Nakladatelstvi {  get; set; } = "";
        [Range(1, 4000, ErrorMessage = "tolik stran...")]
        public int PocetStran {get; set;}

        public Denik(int id, string jmeno, string prijmeni, string nazev, string popis, int rokVydani, string nakladatelstvi, int pocetStran)
        {
            Id = id;
            Jmeno = jmeno;
            Prijmeni = prijmeni;
            Nazev = nazev;
            Popis = popis;
            RokVydani = rokVydani;
            Nakladatelstvi = nakladatelstvi;
            PocetStran = pocetStran;
        }
        public Denik() { 
        }
    }
}
