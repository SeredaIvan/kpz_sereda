using DiyaClassLib;
using System.Text;

Console.OutputEncoding=Encoding.UTF8;

Supervisor supervisor = new Supervisor();


Document passport = new Passport("Олег", "Снігур", "Паспорт громадянина України", DateTime.Now, DateTime.Now.AddYears(10),123456789, new DateTime(1990, 1, 1));

Document militaryId = new MilitaryID("Святослав", "Грізний", true, "Офіцер", "3 ОШБр", DateTime.Now, DateTime.Now.AddYears(5));

Document driverLicense = new DriverLicense("Максим", "Швидкий", "B,C","ТСЦ 5443", DateTime.Now, DateTime.Now.AddYears(2));

Document yeDock = new yeDocument("Максим", "Швидкий");

supervisor.AddDocument(passport);
supervisor.AddDocument(militaryId);
supervisor.AddDocument(driverLicense);
supervisor.AddDocument(yeDock);

supervisor.ShowDocuments();


