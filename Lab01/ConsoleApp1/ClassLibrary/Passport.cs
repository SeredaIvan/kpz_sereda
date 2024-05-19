using System;
using System.Xml.Linq;

namespace DiyaClassLib
{
    public class Passport : Document, IDocWithTimeUntil // Program to Interfaces
    {
        private string description;
        private string number;
        private int itn;
        private DateTime birthdayDate;
        private DateTime dateOfIssue;
        private DateTime dateOfExpiry;

        public string Description
        {
            get { return description; }
            set { description = value; }
        }
        public string Number
        {
            get { return number; }
            set { number = value; }
        }
        public DateTime BirthdayDate
        {
            get { return birthdayDate; }
            set { birthdayDate = value; }
        }
        public int ITN
        {
            get { return itn; }
            set { itn = value; }
        }
        public DateTime DateOfIssue
        {
            get { return dateOfIssue; }
        }
        public DateTime DateOfExpiry
        {
            get { return dateOfExpiry; }
        }

        public Passport(string name, string surname,string description, DateTime dateOfIssue, DateTime dateOfExpiry, int itn, DateTime birthdayDate)
            : base("Паспорт", name,surname) 
        {
            if (string.IsNullOrWhiteSpace(description))
                throw new ArgumentException("Опис не може бути порожнім", nameof(description));

            if (dateOfIssue == default(DateTime))
                throw new ArgumentException("Дата видачі має бути заданою", nameof(dateOfIssue));

            if (dateOfExpiry == default(DateTime))
                throw new ArgumentException("Дата закінчення дії має бути заданою", nameof(dateOfExpiry));

            if (dateOfIssue >= dateOfExpiry)
                throw new ArgumentException("Дата видачі повинна бути раніше за дату закінчення дії", nameof(dateOfIssue));

            Description = description;
            this.dateOfIssue = dateOfIssue;
            this.dateOfExpiry = dateOfExpiry;
            ITN = itn;
            BirthdayDate = birthdayDate;
            Random random = new Random();
            Number = random.Next(100000000, 1000000000).ToString();
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
