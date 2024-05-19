**DRY (Don't Repeat Yourself)**

  DRY is a principle aimed at reducing the repetition of code. In this codebase, the principle is applied in the constructor validation methods. Each class validates its fields to ensure that the input values are correct, minimizing redundancy by centralizing validation logic.

**KISS (Keep It Simple, Stupid)**

  KISS, or "Keep It Simple, Stupid" emphasizes simplicity and clarity in design and implementation. It advocates for straightforward solutions that are easy to understand, avoiding unnecessary complexity or over-engineering. In the context of a codebase, KISS encourages clear and concise designs, prioritizing simplicity over intricate solutions. The goal of KISS is to make code easier to comprehend and maintain for developers, ensuring it remains accessible and efficient over time.

***SOLID***

SOLID is a set of principles in object-oriented programming aimed at creating more maintainable and scalable software. Each letter in SOLID represents a different principle:

> *Single Responsibility Principle (SRP):* Each class should have only one reason to change, meaning it should have only one responsibility or job.

In the case of developing this project, each class is responsible for only one function.

> *Open/Closed Principle (OCP):* Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification, allowing new functionality to be added without altering existing code.

In the case of developing this project, each class is responsible for only one function. Relevant code : [Document.cs](./ConsoleApp1/ClassLibrary/Document.cs), (./ConsoleApp1/ClassLibrary/Password.cs) etc.

> *Liskov Substitution Principle (LSP):* Subtypes should be substitutable for their base types, meaning objects of a superclass should be replaceable with objects of a subclass without affecting the correctness of the program.For example [Program.cs - line 9-20](./ConsoleApp1/ConsoleApp/Program.cs#9-20)

>*Interface Segregation Principle (ISP):* Clients should not be forced to depend on interfaces they don't use. Instead, interfaces should be segregated, meaning they should contain only the methods that are relevant to their implementing classes. Relevant code : [Passport.cs - line 6](./ConsoleAdd1/ClassLibrary/Passport.cs#6)

>*Dependency Inversion Principle (DIP):* High-level modules should not depend on low-level modules; both should depend on abstractions. Abstractions should not depend on details; details should depend on abstractions.

In practice, adhering to SOLID principles results in code that is easier to understand, maintain, and extend. It promotes modularity, flexibility, and reusability by encouraging developers to write code that is well-structured, loosely coupled, and highly cohesive.

**YAGNI (You Aren`t Gonna Need It)**

YAGNI, or "You Aren't Gonna Need It," is a principle in software development advocating against over-engineering or adding functionality prematurely. By adhering to YAGNI, developers focus on delivering the necessary functionality efficiently, without wasting time or resources on features that may never be used. This principle encourages simplicity, agility, and a pragmatic approach to software development, allowing teams to adapt and evolve their codebase based on real user feedback and evolving requirements.

**Composition over inheritance**

Composition over inheritance advocates for creating new functionality by composing objects rather than relying solely on class inheritance, promoting flexible, modular designs that are easier to extend and maintain. This approach emphasizes interfaces, abstract classes, and delegation to achieve code reuse and modularity while minimizing the complexities associated with inheritance. For example [Document.cs - line 48-55](./ConsoleApp1/ClassLibrary/Document.cs#48-55)

**Program to interfaces, not implementations**

Program to interfaces, not implementations advises coding with interfaces rather than concrete classes. This practice fosters flexibility, extensibility, and easier maintenance by promoting loose coupling and abstraction. It improves code readability, testability, and scalability, contributing to better software design.Relevant code [DriverLicence.cs - line 5](./ConsoleApp1/ClassLibrary/DriverLicense.cs#5)

**Fail fast**

Fail fast is a principle urging quick detection and reporting of errors at their source, rather than letting them spread. It promotes rapid identification and resolution of issues, enhancing software reliability and stability.For example [DriverLicense.cs - line 47-57](./ConsoleApp1/ClassLibrary/DriverLicense.cs#19-26),[Passport.cs - line 47-57](./ConsoleApp1/ClassLibrary/Passport.cs#47-57)

*In conclusion*, software development principles like DRY, KISS, SOLID, YAGNI, Composition over Inheritance, Program to Interfaces, and Fail Fast, advocate for efficiency, simplicity, maintainability, flexibility, and reliability, ultimately contributing to the creation of robust and scalable software systems.
