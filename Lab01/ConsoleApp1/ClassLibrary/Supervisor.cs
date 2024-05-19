using System;
using System.Collections.Generic;

namespace DiyaClassLib
{
    public class Supervisor
    {
        private List<Document> documents;
        public List<Document> Documents
        {
            get { return documents; }
        }
        public Supervisor()
        {
            documents = new List<Document>();
        }
        public void AddDocument(Document document)
        {
            documents.Add(document);
        }
        public void RemoveDocument(Document document)
        {
            documents.Remove(document);
        }
        public void ShowDocuments()//for consols
        {
            Console.WriteLine("///////////////////////////////////////");
            foreach (Document document in documents) {
                Console.WriteLine("__________________________________________");
                if (document is Passport passport)
                {
                    Console.WriteLine(passport.Type);
                    Console.WriteLine("Ім'я " + passport.Name);
                    Console.WriteLine("Прізвище " + passport.Surname);
                    Console.WriteLine("Опис " + passport.Description);
                    Console.WriteLine("Номер " + passport.Number);
                    Console.WriteLine("День народження " + passport.BirthdayDate.ToString());
                    Console.WriteLine("ІПН " + passport.ITN.ToString());
                    Console.WriteLine("Дата видачі " + passport.DateOfIssue.ToString());
                    Console.WriteLine("Дійсний до " + passport.DateOfExpiry.ToString());
                    Console.WriteLine("Qr-code" + passport.generateQrCode().QR);
                }
                else if (document is MilitaryID militaryID)
                {

                    Console.WriteLine(militaryID.Type);
                    Console.WriteLine("Ім'я " + militaryID.Name);
                    Console.WriteLine("Прізвище " + militaryID.Surname);
                    Console.WriteLine("Гідний до служби " + (militaryID.Worthy ? "Так" : "Ні"));
                    Console.WriteLine("Ранг " + militaryID.Rank);
                    Console.WriteLine("Підрозділ " + militaryID.Unit); ;
                    Console.WriteLine("Дата видачі " + militaryID.DateOfIssue.ToString());
                    Console.WriteLine("Дійсний до " + militaryID.DateOfExpiry.ToString());
                    Console.WriteLine("Qr-code" + militaryID.generateQrCode().QR);
                }
                else if (document is DriverLicense driverLicence)
                {

                    Console.WriteLine(driverLicence.Type);
                    Console.WriteLine("Ім'я " + driverLicence.Name);
                    Console.WriteLine("Прізвище " + driverLicence.Surname);
                    Console.WriteLine("Орган, що видав документ " + driverLicence.Authority);
                    Console.WriteLine("Категорія" + driverLicence.Category);
                    Console.WriteLine("Дата видачі " + driverLicence.DateOfIssue.ToString());
                    Console.WriteLine("Дійсний до " + driverLicence.DateOfExpiry.ToString());
                    Console.WriteLine("Qr-code" + driverLicence.generateQrCode().QR);
                }
                else if (document is yeDocument yeDocument)
                {
                    Console.WriteLine(yeDocument.Type);
                    Console.WriteLine("Ім'я " + yeDocument.Name);
                    Console.WriteLine("Прізвище " + yeDocument.Surname);
                }
                Console.WriteLine("__________________________________________");

            }
            Console.WriteLine("///////////////////////////////////////");
        }
    }
}
