using System;

namespace DiyaClassLib
{
    public abstract class Document
    {
        private Guid id;
        private string type;
        private string name;
        private string surname;
        public Guid Id
        {
            get { return id; }
            private set { id = value; }
        }
        public string Type
        {
            get { return type; }
            set { type = value; }
        }
        public string Name
        {
            get { return name; }
            set { name = value; }
        }
        public string Surname
        {
            get { return surname; }
            set { surname = value; }
        }

        public Document(string type,string name, string surname)
        {
            if (string.IsNullOrWhiteSpace(type))
                throw new ArgumentException("Тип документу не може бути порожнім", nameof(type));

            if (string.IsNullOrWhiteSpace(name))
                throw new ArgumentException("Прізвище не може бути порожнім", nameof(name));

            if (string.IsNullOrWhiteSpace(name))
                throw new ArgumentException("Ім'я не може бути порожнім", nameof(surname));
            Id = Guid.NewGuid();
            Type = type;
            Name = name;
            Surname = surname;
        }

        public QrCode generateQrCode()
        {
            // Composition Over Inheritance
            //or not static QrGenerator qrgen= new QrGenerator()
            //return QrGenerator.generateQrCode(this.Type, this.getId());

            return QrGenerator.generateQrCode(this.Type, this.Id);
        }
    }
}
