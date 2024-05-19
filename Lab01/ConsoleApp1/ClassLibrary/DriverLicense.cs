using System;

namespace DiyaClassLib
{
    public class DriverLicense : Document, IDocWithTimeUntil //Program to Interfaces
    { 
        private string authority { get; set; }
        private DateTime dateOfIssue;
        private DateTime dateOfExpiry;
        private string category;
        public string Authority { get { return authority; } set { authority = value; } }
        public string Category { get { return category; } set { category = value; } }
        public DateTime DateOfIssue { get { return dateOfIssue; } }
        public DateTime DateOfExpiry { get { return dateOfExpiry; } }


        public DriverLicense(string name, string surname, string category, string authority, DateTime dateOfIssue, DateTime dateOfExpiry) : base("Водійські права", name, surname)
        {
            if (string.IsNullOrWhiteSpace(category))
                throw new ArgumentException("Категорія не може бути порожньою", nameof(category));

            if (string.IsNullOrWhiteSpace(authority))
                throw new ArgumentException("Орган, що видав документ, не може бути порожнім", nameof(authority));

            if (dateOfIssue >= dateOfExpiry)
                throw new ArgumentException("Дата видачі має бути раніше за дату закінчення дії", nameof(dateOfIssue));
            Category = category;
            Authority = authority;
            this.dateOfIssue = dateOfIssue;
            this.dateOfExpiry = dateOfExpiry;
        }
        public bool rewriteDateOfExpiry(DateTime newDateOfExpiry)
        {
            if (newDateOfExpiry > DateOfExpiry)
            {
                dateOfExpiry = newDateOfExpiry;
                return true;
            }
            return false;
        }
        
    }
}
