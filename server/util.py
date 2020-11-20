import json
import pickle
import numpy

__city_name = None
__data_columns = None
__model = None


def get_estimate_price(city_name, house_area, number_of_rooms, swimming_pool):
    city_name_index = np.where(X.columns = city_name)[0][0]

    x = np.zeros(len(X.columns))
    x[0] = house_area
    x[1] = swimming_pool
    x[2] = number_of_rooms
    if city_name_index >= 0:
            x[city_name_index] = 1

    return __model.predict([x])


def get_city_names():
    return __city_name

def load_saved_artifacts():
    print("Loading saved artifacts start...")
    global __data_columns
    global __city_name

    with open("./artifacts/columns.json", "r") as f:
        __data_columns = json.load(f)["data_columns"]
        __city_name = __data_columns[3:]

    with open ("./artifacts/immo_machine_learning.pickle", "rb") as f:
        __model = pickle.load(f)
    print("Loading saved artifacts... done")


if __name__ == "__main__":
    load_saved_artifacts()
    print(get_city_names())
