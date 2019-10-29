using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlatformController : MonoBehaviour
{

    

    //destinations /targets
    public Transform[] targets;

    //speed
    public float speed = 1;

    // flag that sets whether we are moving or not
    bool isMoving = false;

    //next destination index
    int nextIndex;
    
    // Start is called before the first frame update
    void Start()
    {
        // set the player to first target
        transform.position = targets[0].position;

        //next destination is 1
        nextIndex = 1;
    }

    // Update is called once per frame
    void Update()
    {
        // check for input
        HandleInput();
        
        // move our platform
        HandleMovement();
        
    }

    private void HandleInput()
    {
        // check for Fire1 Axis
        if (Input.GetButtonDown("Fire1"))
        {
            isMoving = !isMoving;
        }
    }

    //take care of movement
    void HandleMovement()
    {
        if (isMoving)
        {
            //calculate distance from target
            float distance = Vector3.Distance(transform.position, targets[nextIndex].position);
            //have we arrived?
            if (distance > 0)
            {
                // calculate difference or offset from target d = v* t
                float step = speed * Time.deltaTime;

                // move by offset(step) 
                transform.position = Vector3.MoveTowards(transform.position, targets[nextIndex].position, step);
            }
            // if we have arrived we should update the nextIndex
            else
            {
                //next index is increased by 1
                nextIndex++;

                //array element index starts at 0 and goes all the way to length -1
                if (nextIndex == targets.Length)
                {
                    nextIndex = 0;
                }

                //stop moving
                isMoving = false;
            }
        }
        

    }
}
