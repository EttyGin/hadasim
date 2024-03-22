"""
Exercise 2 - Twitter towers.
Author: Ettie Ginzburg
"""
#Massages to user
SELECT_MSG = "Select the tower type:\n1. A rectangular tower\n2. Triangle tower\n3. Quit\n"
TRI_MSG_SELECT = "Select a service:\n1. Calculating the perimeter of a triangle\n2. Printing the triangle\n"
ERROR_MSG = "Invalid selection"
HEIGTH_ASK = "Enter the height of the tower, greater than 2\n"
WIDTH_ASK = "Enter the width of the tower\n"

OPTIONS = {"RECT": 1, "TRIANGLE": 2, "EXIT": 3}
SCND_OPS = {"PERIMETER": 1, "PRINT": 2}


def rect(height, width):
    MIN_FOR_AREA = 5
    if (abs(height - width) > MIN_FOR_AREA):
        print("The area is: " + str(height * width))
    else:
        print("The perimeter is: " + str((height + width) * 2))


def is_printable(height, width):
    return width % 2 == 1 and width <= 2 * height


def triangle(height, width):
    tri_chose = int(input(TRI_MSG_SELECT))
    if tri_chose == SCND_OPS["PERIMETER"]:
        print("The perimeter is: " + str((height * width) / 2))
    elif tri_chose == SCND_OPS["PRINT"]:
        if (is_printable(height, width)):
            print_triangle(height, width);
        else:
            print("The triangle cannot be printed")
    else:
        print("Invalid selection, returns to main menu")


def print_triangle(height, width):
    stars_list = []
    inner_lines = height - 2
    left_vals = width // 2 - 1
    inner_amount = inner_lines // left_vals
    rest_amount = inner_lines % left_vals

    i = 1
    while i <= width:
        if i == 1 or i == width:
            stars_list += ["*" * i]
        elif i == 3:
            stars_list += ["*" * i] * (inner_amount + rest_amount)
            # .append("*" * (inner_amount + rest_amount)))
        else:
            stars_list += ["*" * i] * inner_amount
        i += 2  # next

    for line in stars_list:
        num_stars = len(line)
        print(" " * ((width - num_stars) // 2) + "*" * num_stars)


def main():
    choice = int(input(SELECT_MSG))

    while choice != OPTIONS["EXIT"]:

        if choice not in OPTIONS.values():
            print(ERROR_MSG)
            continue

        height = int(input(HEIGTH_ASK))
        width = int(input())

        if choice == OPTIONS["RECT"]:
            rect(height, width)
        elif choice == OPTIONS["TRIANGLE"]:
            triangle(height, width)

        choice = int(input("\n" + SELECT_MSG))  # Reset

    print("Goodbye")


if __name__ == "__main__":
    main()